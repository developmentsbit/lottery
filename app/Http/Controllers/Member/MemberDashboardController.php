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
use App\Models\Member as MemberModel;
use App\Models\Country;
use Hash;
use App\Models\Post;
use App\Models\User;
use App\Models\Result;
use App\Models\Agent;
use App\Models\AgentAccounts;


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
        $data['result'] = Result::where('status',1)->first();
        $data['referrar'] = MemberModel::where('member_id',Auth::guard('member')->user()->referral_no)->first();
        return $this->view($this->path,'home',$data);
    }

    public function personal_profile()
    {
        $param['data'] = MemberModel::where('member_id',Auth::guard('member')->user()->member_id)->first();
        $param['country'] = Country::all();
        return $this->view($this->path,'personal_profile',$param);
    }

    public function personal_profile_update(Request $request,$id)
    {
        $file = $request->file('profile');
        if($file)
        {
            if(Auth::guard('member')->user()->profile != NULL)
            {
                $pathImage = MemberModel::find(Auth::guard('member')->user()->id);

                $path = public_path().'/MemberProfile/'.$pathImage->profile;

                if(file_exists($path))
                {
                    unlink($path);
                }
            }

            $imageName = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/MemberProfile/',$imageName);
            MemberModel::find($id)->update(['profile' => $imageName]);
        }
        $update = MemberModel::find($id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender'=>$request->gender,
            'city'=>$request->city,
            'country'=>$request->country,
            'email'=>$request->email,
            'nationality'=>$request->nationality,
        ]);



        if($update)
        {
            Alert::success('Success', 'Data Update Success');
            return redirect()->back();
        }
        else
        {
            Alert::error('Congrats', 'Data Update Error');
            return redirect()->back();
        }
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

        if($param['game']->on_off == 0)
        {
            $param['year'] = 0000;
            $param['month'] = 00;
            $param['day'] = 00;

            $end_time = '00:00:00';

            $param['hour'] = Date::getHours(':',$end_time);
            $param['min'] = Date::getMin(':',$end_time);
            $param['sec'] = Date::getSec(':',$end_time);
        }
        else
        {
            $param['year'] = Date::getYear('-', $param['game']->end_date);
            $param['month'] = Date::getMonth('-', $param['game']->end_date);
            $param['day'] = Date::getDay('-', $param['game']->end_date);

            $end_time = date('h:i:s', strtotime($param['game']->end_time));

            $param['hour'] = Date::getHours(':',$end_time);
            $param['min'] = Date::getMin(':',$end_time);
            $param['sec'] = Date::getSec(':',$end_time);
        }





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
    public function get_method_vat(Request $request)
    {
        $data = PaymentMethod::find($request->method);

        if($data->status == 0)
        {
            return '<span style="font-weight:bold;" class="text-danger">This Service Is Unavailable</span>';
        }
        else
        {
            return '<span style="font-weight:bold;" class="text-success">Cash Out Charge : '.$data->vat.'%</span>';
        }
    }

    public function cash_in_store(Request $request)
    {
        // dd($request->all());
        $data = array(
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'member_id' => Auth::guard('member')->user()->member_id,
            'payment_type' => $request->method,
            'transaction_type' => 1,
            'balance' => $request->amount,
            'payment_account' => $request->payment_account,
            'transaction_id' => $request->transaction_id,
            'status' => '0',
        );

        if($request->method == 'mobile_banking')
        {
            $data['original_amount'] = $request->original_amount;
            $data['country_id'] = $request->country;
            $data['agent_id'] = $request->agent;
            $data['agent_accounts'] = $request->agent_account;
        }
        else
        {
            $data['original_amount'] = $request->amount;
        }
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
        $param['data'] = CustomerTransaction::withTrashed()
        ->where('member_id',Auth::guard('member')
        ->user()->member_id)
        ->where('transaction_type',1)
        ->orderBy('date','DESC')
        ->with('method')
        ->get();
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

        if(isset($request->rumble_amount))
        {
            for ($i=0; $i < count($request->lottery_number) ; $i++)
            {
                if($request->lottery_number[$i] != NULL)
                {
                    $data = array(
                        'invoice_no' => $invoice_no,
                        'lottery_number' => $request->lottery_number[$i],
                        'direct_amount' => $request->direct_amount[$i],
                        'rumble_amount'=> $request->rumble_amount[$i],
                    );
                    GameEntry::create($data);
                }
            }


        }
        else
        {
            for ($i=0; $i < count($request->lottery_number) ; $i++)
            {
                if($request->lottery_number[$i] != '')
                {
                    if($request->lottery_number[$i] != NULL)
                    {
                        $data = array(
                            'invoice_no' => $invoice_no,
                            'lottery_number' => $request->lottery_number[$i],
                            'direct_amount' => $request->direct_amount[$i],
                        );
                        GameEntry::create($data);
                    }
                }
            }
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

    public function cash_out()
    {
        $param['method'] = PaymentMethod::all();
        return $this->view($this->path,'cash_out',$param);
    }

    public function store_cash_out(Request $request)
    {
        // dd($request->all());
        $data = array(
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'transaction_type' => '4',
            'member_id' => Auth::guard('member')->user()->member_id,
            'payment_type' => $request->method,
            'payment_account' => $request->payment_account,
            'status' => '0',
        );



        $amount = $request->amount;
        if($request->method == 'mobile_banking')
        {
            $vatper = 8;
        }
        else
        {
            $method  = PaymentMethod::find($request->method);



            $vatper = $method->vat;

        }
        if($vatper > 0)
        {
            $vat = ($amount * $vatper) / 100;
        }
        else
        {
            $vat = 0;
        }

        $amountWithVat = $amount + $vat;

        $data['withdraw'] = $amountWithVat;

        $data['vat'] = $vat;

        $balance = Member::getWinBalance(Auth::guard('member')->user()->member_id);

        // return $amountWithVat;


        if($request->method == 'mobile_banking')
        {
            $data['original_amount'] = $request->original_amount - $vat;
            $data['country_id'] = $request->country;
            $data['agent_id'] = $request->agent;
            $data['agent_accounts'] = $request->agent_account;
        }
        else
        {
            $data['original_amount'] = $request->amount - $vat;
        }


        if($amountWithVat > $balance)
        {
            Alert::warning('Warning', 'Insuficient Balance');
            return redirect()->back();
        }

        try {
            CustomerTransaction::create($data);
            Alert::success('Success', 'Your Request Is Sent Wait For Confirmation');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error('Error', 'Something Went Wrong');
            return redirect()->back();
        }
    }

    public function cash_out_history()
    {
        $param['data'] = CustomerTransaction::withTrashed()
        ->where('member_id',Auth::guard('member')
        ->user()->member_id)->where('transaction_type',4)
        ->orderBy('date','DESC')
        ->with('method')
        ->get();
        return $this->view($this->path,'cash_out_history',$param);
    }

    public function referral_history()
    {
        $param['data'] = MemberModel::where('referral_no',Auth::guard('member')->user()->memebr_id)->get();
        return $this->view($this->path,'referral_history',$param);
    }

    public function cash_to_win()
    {
        return $this->view($this->path,'cash_to_win');
    }
    public function win_to_cash()
    {
        return $this->view($this->path,'win_to_cash');
    }

    public function balance_convert(Request $request)
    {

        if($request->post_type == 'cash_to_win')
        {
            $balance = Member::getBalance(Auth::guard('member')->user()->member_id);
            if($request->amount > $balance)
            {
                Alert::error('Error', 'Insuficient Balance');
                return redirect()->back();
            }
            $vat = ($request->amount * 1) / 100;

            $balanceWithvat = $request->amount + $vat;

            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => Auth::guard('member')->user()->member_id,
                'transaction_type' => '6',
                'winbalance' => $request->amount,
                'balance' => $balanceWithvat * -1,
                'vat' => $vat,
                'status' => 1,
            ]);
            Alert::success('Success', 'Your Cash To Win Balance Coverted');
            return redirect()->back();
        }
        else
        {
            $balance = Member::getWinBalance(Auth::guard('member')->user()->member_id);
            if($request->amount > $balance)
            {
                Alert::error('Error', 'Insuficient Balance');
                return redirect()->back();
            }
            $vat = ($request->amount * 1) / 100;

            $balanceWithvat = $request->amount + $vat;

            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => Auth::guard('member')->user()->member_id,
                'transaction_type' => '7',

                'balance' => $request->amount,
                'winbalance' => $balanceWithvat  * -1,
                'vat' => $vat,
                'status' => 1,
            ]);
            Alert::success('Success', 'Your Win To Cash Balance Coverted');
            return redirect()->back();
        }
    }

    public function cash_transfer()
    {
        $param['member'] = MemberModel::all();
        return $this->view($this->path,'cash_transfer',$param);
    }
    public function win_transfer()
    {
        $param['member'] = MemberModel::all();
        return $this->view($this->path,'win_transfer',$param);
    }

    public function balance_transfer(Request $request)
    {
        if($request->post_type == 'cash_transfer')
        {
            $balance = Member::getBalance(Auth::guard('member')->user()->member_id);
            if($request->amount > $balance)
            {
                Alert::error('Error', 'Insuficient Balance');
                return redirect()->back();
            }

            $vat = 3;

            $vatAmount = ($request->amount * $vat) / 100;

            $balanceWithVat = $request->amount + $vatAmount;

            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => Auth::guard('member')->user()->member_id,
                'transaction_type' => '2',
                'transfer' => $balanceWithVat,
                'vat' => $vatAmount,
                'transfer_to' => $request->member_id,
                'status' => 1,
            ]);
            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => $request->member_id,
                'transaction_type' => '2',
                'balance' => $request->amount,
                'transfer_from' => Auth::guard('member')->user()->member_id,
                'status' => 1,
            ]);

            Alert::success('Success', 'Cash Balance Transfered');
            return redirect()->back();
        }
        else
        {
            $balance = Member::getWinBalance(Auth::guard('member')->user()->member_id);
            if($request->amount > $balance)
            {
                Alert::error('Error', 'Insuficient Balance');
                return redirect()->back();
            }

            $vat = 2;

            $vatAmount = ($request->amount * $vat) / 100;

            $balanceWithVat = $request->amount + $vatAmount;

            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => Auth::guard('member')->user()->member_id,
                'transaction_type' => '8',
                'winbalance_transfer' => $balanceWithVat,
                'vat' => $vatAmount,
                'transfer_to' => $request->member_id,
                'status' => 1,
            ]);
            CustomerTransaction::create([
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'member_id' => $request->member_id,
                'transaction_type' => '8',
                'winbalance' => $request->amount,
                'transfer_from' => Auth::guard('member')->user()->member_id,
                'status' => 1,
            ]);

            Alert::success('Success', 'Win Balance Transfered');
            return redirect()->back();
        }
    }

    public function change_password()
    {
        return $this->view($this->path,'change_password');
    }

    public function check_password(Request $request)
    {
        $check = MemberModel::where('member_id',Auth::guard('member')->user()->member_id)->where('raw_text_pass',$request->existing_password)->count();

        if($check > 0)
        {
            return 1;
        }
        else
        {
            return '<span class="text-danger">Password Does Not Matched</span>';
        }
    }

    public function submit_change_password(Request $request)
    {
        if($request->password != $request->confirm_password)
        {
            Alert::error('Error', 'Password & Confirm Password Does Not Matched');
            return redirect()->back();
        }

        MemberModel::where('member_id',Auth::guard('member')->user()->member_id)->update([
            'password' => Hash::make($request->password),
            'raw_text_pass' => $request->password,
        ]);

        Auth::guard('member')->logout();
        return redirect(route('member.login'));
    }

    public function cash_balance_history()
    {
        $param['data'] = CustomerTransaction::where('member_id',Auth::guard('member')->user()->member_id)->orderBy('date','DESC')->where('transaction_type','!=',4)->where('transaction_type','!=',5)->where('transaction_type','!=',8)->with('method')->get();
        return $this->view($this->path,'cash_balance_history',$param);
    }
    public function win_balance_history()
    {
        $param['data'] = CustomerTransaction::where('member_id',Auth::guard('member')->user()->member_id)->orderBy('date','DESC')->where('transaction_type','!=',3)->where('transaction_type','!=',1)->where('transaction_type','!=',2)->with('method')->get();
        return $this->view($this->path,'win_balance_history',$param);
    }

    public function get_original_amount(Request $request)
    {
        $method = PaymentMethod::find($request->method);

        $result = $request->amount / $method->dollar_rate;

        $to_fixed = number_format((float)$result,2,'.','');

        // return $to_fixed;

        return $to_fixed;
    }
    public function get_cash_out_amount(Request $request)
    {
        $method = PaymentMethod::find($request->method);

        $result = $request->amount * $method->dollar_rate;

        return '<span class="text-success">You Will Recive : <b>'.$result.'</b></span>';
    }

    public function create_post()
    {
        return $this->view($this->path,'create_post');
    }

    public function store_post(Request $request)
    {
        $data = array(
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'member_id' => Auth::guard('member')->user()->member_id,
            'post_type' => $request->post_type,
            'amount' => $request->amount,
            'contact_type' => $request->contact_type,
            'contact_number' => $request->contact_number,
            'status' => 1,
        );

        try {
            Post::create($data);
            Alert::success('Success', 'Post Created');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error('Error', 'Post Does Not Created');
            return redirect()->back();
        }
    }

    public function post_view()
    {
        $param['data'] = Post::where('member_id',Auth::guard('member')->user()->member_id)->orderBy('date','DESC')->get();

        return $this->view($this->path,'post_view',$param);
    }

    public function change_post_status($id)
    {
        $check = Post::find($id);
        if($check->status == 1)
        {
            $check->update([
                'status' => 0,
            ]);
        }
        else
        {
            $check->update([
                'status' => 1,
            ]);
        }

        return redirect()->back();
    }
    public function post_delete($id)
    {
        Post::find($id)->delete();
        Alert::success('Success', 'Your Post Removed');
        return redirect()->back();
    }
    public function public_post()
    {
        $param['data'] = Post::where('member_id','!=',Auth::guard('member')->user()->member_id)->orderBy('date','DESC')->where('status',1)->get();

        return $this->view($this->path,'public_post',$param);
    }

    public function personal_to_agent()
    {
        $param['agent'] = User::all();

        return $this->view($this->path,'personal_to_agent',$param);
    }

    public function cashout_agent_store(Request $request)
    {
        // dd($request->all());
        $data = array(
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'transaction_type' => '4',
            'member_id' => Auth::guard('member')->user()->member_id,
            'agent_id' => $request->agent_id,
            'payment_account' => $request->payment_account,
            'status' => '0',
        );

        $amount = $request->amount;


        $vat = ($amount * 8) / 100;


        $amountWithVat = $amount + $vat;

        $data['withdraw'] = $amountWithVat;

        $data['vat'] = $vat;

        $balance = Member::getWinBalance(Auth::guard('member')->user()->member_id);

        // return $amountWithVat;


        if($amountWithVat > $balance)
        {
            Alert::warning('Warning', 'Insuficient Balance');
            return redirect()->back();
        }

        try {
            CustomerTransaction::create($data);
            Alert::success('Success', 'Your Request Is Sent Wait For Confirmation');
            return redirect()->back();
        } catch (\Throwable $th) {
            Alert::error('Error', 'Something Went Wrong');
            return redirect()->back();
        }
    }

    public function getCountry(Request $request)
    {
        $country = Country::where('dollar_rate','!=',NULL)->where('currency_name','!=',NULL)->where('status',1)->get();

        $output = '<option value="">Select One</option>';

        foreach($country as $c)
        {
            $output.='<option value="'.$c->id.'">'.$c->name.'</option>';
        }

        return $output;
    }

    public function getAgentList(Request $request)
    {
        $country = Agent::where('country_id',$request->country_id)->get();

        $output = '<option value="">Select One</option>';

        foreach($country as $c)
        {
            $output.='<option value="'.$c->id.'">'.$c->name.'</option>';
        }

        return $output;
    }
    public function getAgentAccounts(Request $request)
    {
        $country = AgentAccounts::where('agent_id',$request->agent_id)->get();

        $output = '<option value="">Select One</option>';

        foreach($country as $c)
        {
            if($request->type == 'cashout')
            {
                $output.='<option value="'.$c->id.'">('.$c->account_name.')</option>';
            }
            else
            {
                $output.='<option value="'.$c->id.'">'.$c->number.'('.$c->account_name.')</option>';

            }
        }

        return $output;
    }

    public function getOriginalAmount(Request $request)
    {
        $country = Country::find($request->country_id);

        $info['dollar_rate'] = $country->dollar_rate;
        $info['currency_name'] = $country->currency_name;

        return response()->json($info);
    }
    public function getOriginalAmountCashout(Request $request)
    {
        $country = Country::find($request->country_id);

        $info['dollar_rate'] = $country->dollar_rate;
        $info['currency_name'] = $country->currency_name;


        return response()->json($info);
    }

    public function getpay_method(Request $request)
    {
        $pay_method = PaymentMethod::find($request->payment_method);

        $output = '<span class="text-danger">Account No : '.$pay_method->number.'</span>';

        return $output;
    }
}
