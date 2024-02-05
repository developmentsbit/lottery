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
        $withdraw = $member->sum('withdraw');

        $cash_balance = $balance - ($transfer + $expense + $withdraw);

        return $cash_balance;
    }
}
