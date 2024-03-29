<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use App\Http\Requests\MemberRequest;
use App\Interfaces\MemberInterface;
use Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use App\Models\Country;
use App\Models\Member;

class MemberAuthController extends Controller
{
    use ViewDirective;
    protected $path;
    protected $interface;
    public function __construct(MemberInterface $interface)
    {
        $this->path = 'member.auth';
        $this->interface = $interface;
    }

    public function registration(Request $request)
    {
        if(isset($request->refer))
        {
            $param['referral_no'] = base64_decode($request->refer);
        }
        $param['country'] = Country::all();
        return $this->view($this->path,'registration',$param);
    }

    public function store(MemberRequest $request)
    {
        if($request->password != $request->confirm_password)
        {
            Alert::warning(__('common.warning'), __('frontend.password_not_matched'));
            return redirect()->back();
        }

        return $this->interface->store($request);
    }

    public function showLoginForm()
    {

        return $this->view($this->path,'login');

    }

    public function loginAttempt(Request $request)
    {
        $check = Member::where('mobile_no',$request->mobile_no)->first();
        if(isset($check))
        {
            if($check->status != 1)
            {
                Alert::warning('Warning', 'Your Request Did Not Accepted. Wait For Approval');
                return redirect(route('member.login'));
            }
        }
        if(Auth::guard('member')->attempt(['mobile_no' => $request->mobile_no, 'password' => $request->password]))
        {
            return redirect(route('member.dashboard'));
        }
        else
        {
            Alert::error('Error', 'Your Credential Does Not Matched Our Records');
            return redirect(route('member.login'));
        }
    }
}
