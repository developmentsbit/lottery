@extends('member.dashboard.master')
@section('member_dash_title')
Lottery
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
</style>
<div class="content-wrapper" style="color: black">
    @component('components.user_dashboard_breadcrumb')

    @slot('title2')
       Lottery
    @endslot
    @slot('title3')
       Thai Lottery History
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Lottery
        </div>
        <div class="card-body">
            <table class="table table-borderd table-responsive-sm" id="myTable">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Invoice No</th>
                        <th>Game Name</th>
                        <th>Slot</th>
                        <th>Total Amount</th>
                        <th>Discount</th>
                        <th>Bet Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($params['data']))
                    @foreach ($params['data'] as $v)
                    <tr>
                        <td>
                            {{ App\Traits\Date::DbToOriginal('-',$v->date) }} || {{ App\Traits\Date::twelveHrTime($v->time) }}
                        </td>
                        <td>
                            {{ $v->invoice_no }}
                        </td>
                        <td>
                            @if($v->game_name == "1st_prize_six_digit")
                                1st. Prize Six Digits
                            @elseif($v->game_name == "3up")
                                3 Up
                            @elseif($v->game_name == "2up")
                                2 Up
                            @elseif($v->game_name == "2down")
                                2 Down
                            @elseif($v->game_name == "1of3upsingledigit")
                                1 Of 3 Up Single Digit
                            @elseif($v->game_name == "1of2upsingledigit")
                                1 Of 2 Up Single Digit
                            @elseif($v->game_name == "1of2updowndigit")
                                1 Of 2 Down Single Digit
                            @elseif($v->game_name == "3upgamettotal")
                                3 Up Game Total
                            @elseif($v->game_name == "2upgamettotal")
                                2 Up Game Total
                            @elseif($v->game_name == "2downgametotal")
                                2 Down Game Total
                            @endif
                        </td>
                        <td>
                            {{ $v->slot }}
                        </td>
                        <td>
                            {{ $v->total_amount }}
                        </td>
                        <td>
                            {{ $v->discount }}
                        </td>
                        <td>
                            {{ $v->bet_amount }}
                        </td>
                        <td>
                            <a style="float: left;margin-bottom:4px;" href="{{ route('lottery_info.show_report',$v->id) }}" class="btn btn-sm btn-success" target="blank">View Report</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
