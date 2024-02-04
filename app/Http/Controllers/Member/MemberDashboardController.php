<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use Auth;
use App\Models\PaymentMethod;
use App\Models\CustomerTransaction;
use RealRashid\SweetAlert\Facades\Alert;


class MemberDashboardController extends Controller
{
    protected $path;
    use ViewDirective;
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
        return $this->view($this->path,'lottery');
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
}
