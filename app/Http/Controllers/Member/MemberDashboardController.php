<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use Auth;

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
}
