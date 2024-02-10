<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use Auth;
use App\Models\PaymentMethod;
use App\Models\CustomerTransaction;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\game_setup;
use App\Traits\Idgenerator;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Traits\Date;
use App\Traits\Member;


class MemberDashboardController extends Controller
{
    protected $path;
    use ViewDirective,Idgenerator,Member;
    public function __construct()
    {
        $this->path = 'member.dashboard';
    }
    public function dashboard()
    {
        return $this->view($this->path,'home');
    }

    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect('/');
    }

    public function lottery()
    {
        $param['check'] = game_setup::where('status',1)->count();
        $param['game'] = game_setup::where('status',1)->first();

        $param['year'] = Date::getYear('-', $param['game']->end_date);
        $param['month'] = Date::getMonth('-', $param['game']->end_date);
        $param['day'] = Date::getDay('-', $param['game']->end_date);

        $end_time = date('h:i:s', strtotime($param['game']->end_time));

        $param['hour'] = Date::getHours(':',$end_time);
        $param['min'] = Date::getMin(':',$end_time);
        $param['sec'] = Date::getSec(':',$end_time);

        return $this->view($this->path,'lottery',$param);
    }

    public function cash_in()
    {
        $param['method'] = PaymentMethod::all();
        return $this->view($this->path,'cash_in',$param);
    }

    public function get_method_info(Request $request)
    {
        $data = PaymentMethod::find($request->method);

        if($data->status == 0)
        {
            return '<span style="font-weight:bold;" class="text-danger">This Service Is Unavailable</span>';
        }
        else
        {
            return '<span style="font-weight:bold;" class="text-success">Account No : '.$data->number.'</span>';
        }
    }

    public function cash_in_store(Request $request)
    {
        // dd($request->all());
        $data = array(
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
            'member_id' => Auth::guard('member')->user()->member_id,
            'payment_type' => $request->method,
            'transaction_type' => 1,
            'balance' => $request->amount,
            'payment_account' => $request->payment_acccount,
            'transaction_id' => $request->transaction_id,
            'status' => '0',
        );
        $file = $request->file('document');
        if($file)
        {
            $docName = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/CashInDoc/',$docName);
            $data['document'] = $docName;
        }


        CustomerTransaction::create($data);
        Alert::success('Success', 'Your Request Is Submitted. Wait For Approval');
        return redirect()->back();
    }

    public function cash_in_history()
    {
        $param['data'] = CustomerTransaction::withTrashed()->where('member_id',Auth::guard('member')->user()->member_id)->where('transaction_type',1)->orderBy('date','DESC')->get();
        return $this->view($this->path,'cash_in_history',$param);
    }

    public function lottery_store(Request $request)
    {
        // dd($request->all());

        $balance = Member::getBalance(Auth::guard('member')->user()->member_id);
        if($request->bet_amount > $balance)
        {
            Alert::error('Error', 'Insuficient Balance');
            return redirect()->back();
        }
        $check = game_setup::where('id',$request->game_id)->first();
        if($check->status == 0)
        {
            Alert::error('Error', 'Game Expired');
            return redirect()->back();
        }
        $invoice_no = Idgenerator::AutoCode('game_ledgers','invoice_no','INV-','10');
        $ledger_data = array(
            'invoice_no' => $invoice_no,
            'member_id' => Auth::guard('member')->user()->member_id,
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
            'game_id' => $request->game_id,
            'game_name' => $request->game,
            'slot' => $request->set,
            'total_amount' => $request->totalAmount,
            'discount' => $request->discount,
            'bet_amount' => $request->bet_amount,
        );

        GameLedger::create($ledger_data);

        for ($i=0; $i < count($request->lottery_number) ; $i++)
        {
            $data = array(
                'invoice_no' => $invoice_no,
                'lottery_number' => $request->lottery_number[$i],
                'direct_amount' => $request->direct_amount[$i],
                'rumble_amount'=> $request->rumble_amount[$i],
            );

            GameEntry::create($data);
        }

        CustomerTransaction::create([
            'date' => date('Y-m-d'),
            'time' => date('h:i:s'),
            'member_id' => Auth::guard('member')->user()->member_id,
            'transaction_type' => 3,
            'expense' => $request->bet_amount,
            'status' => 1,
        ]);

        Alert::success('Success', 'Your Game Is Successfully Stored');
        return redirect()->back();
    }

    public function lottery_history()
    {
        $param['data'] = GameLedger::withTrashed()->where('member_id',Auth::guard('member')->user()->member_id)->orderBy('date','DESC')->get();
        return $this->view($this->path,'lottery_history',$param);
    }
}
