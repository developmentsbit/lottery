<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use App\Http\Requests\MemberRequest;
use App\Interfaces\MemberInterface;
use Toastr;

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
            toastr()->error( __('frontend.password_not_matched'),__('common.error'));
            return redirect()->back();
        }
    }
}
