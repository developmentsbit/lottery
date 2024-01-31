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

    public function registration()
    {
        return $this->view($this->path,'registration');
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
        if(Auth::guard('member')->attempt(['mobile_no' => $request->mobile_no, 'password' => $request->password]))
        {
            return redirect(route('member.dashboard'));
        }
        else
        {
            return redirect(route('member.login'));
        }
    }
}
