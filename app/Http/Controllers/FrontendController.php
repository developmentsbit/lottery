<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Models\Member;
use App\Models\Result;
use App\Traits\Date;

class FrontendController extends Controller
{
    use ViewDirective,Date;
    protected $path;

    public function __construct()
    {
        $this->path = 'frontend.user';
    }

    public function index()
    {
        $params['result'] = Result::where('status',1)->first();

        $explodeDate = explode('-',$params['result']);

        $params['draw_date'] = Date::DbToOriginalforTimer('-',$params['result']->next_draw_date);

        // return $params['draw_date'];

        return $this->view('frontend.layouts','home',$params);
    }

    public function about_us()
    {
        return $this->view($this->path,'about_us');
    }

    public function mission_vision()
    {
        return $this->view($this->path,'mission_vision');
    }

    public function buy_sell()
    {
        return $this->view($this->path,'buy_sell');
    }

    public function lottery_result()
    {
        $params['result'] = Result::where('status',1)->first();

        $explodeDate = explode('-',$params['result']);

        $params['draw_date'] = Date::DbToOriginalforTimer('-',$params['result']->next_draw_date);

        return $this->view($this->path,'lottery_result',$params);
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

    public function fees()
    {
        return $this->view($this->path,'fees');
    }

    public function terms_conditions()
    {
        return $this->view($this->path,'terms_conditions');
    }

    public function contact_us()
    {
        return $this->view($this->path,'contact_us');
    }

    public function show_lottery($id)
    {
        $param['ledger'] = GameLedger::find($id);
        $param['member'] = Member::where('member_id',$param['ledger']->member_id)->first();
        $param['game_entry'] = GameEntry::where('invoice_no',$param['ledger']->invoice_no)->get();
        $param['sl'] = 1;
        return $this->view($this->path,'lottery_report',$param);
    }
}
