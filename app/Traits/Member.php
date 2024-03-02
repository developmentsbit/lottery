<?php
namespace App\Traits;
use Auth;
use App\Models\CustomerTransaction;

trait Member {
    public static function getBalance($member_id)
    {
        $member = CustomerTransaction::where('status',1)->where('member_id',$member_id);
        $balance = $member->sum('balance');

        $transfer = $member->sum('transfer');
        $expense = $member->sum('expense');
        // $withdraw = $member->sum('withdraw');

        $cash_balance = $balance - ($transfer + $expense);

        $number_format = number_format((float)$cash_balance, 2, '.', '');

        return $number_format;
    }
    public static function getWinBalance($member_id)
    {
        $member = CustomerTransaction::where('status',1)->where('member_id',$member_id);
        $winbalance = $member->sum('winbalance');
        $withdraw = $member->sum('withdraw');
        $transfer = $member->sum('winbalance_transfer');

        $win_balance = $winbalance - ($withdraw + $transfer);

        $number_format = number_format((float)$win_balance, 2, '.', '');

        return $number_format;
    }
}
