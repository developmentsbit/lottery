<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;

class FrontendController extends Controller
{
    use ViewDirective;
    protected $path;

    public function __construct()
    {
        $this->path = 'frontend.user';
    }

    public function about_us()
    {
        return $this->view($this->path,'about_us');
    }

    public function buy_sell()
    {
        return $this->view($this->path,'buy_sell');
    }
    
    public function lottery_result()
    {
        return $this->view($this->path,'lottery_result');
    }
    
    public function awards_prize()
    {
        return $this->view($this->path,'awards_prize');
    }
    
    public function deposit()
    {
        return $this->view($this->path,'deposit');
    }
    
    public function payout()
    {
        return $this->view($this->path,'payout');
    }
    
    public function agent_list()
    {
        return $this->view($this->path,'agent_list');
    }
}
