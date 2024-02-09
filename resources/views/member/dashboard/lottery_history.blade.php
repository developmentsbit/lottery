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
    <div class="card">
        <div class="card-header">
            Lottery
        </div>
        <div class="card-body">
            <table class="table table-borderd" id="myTable">
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
                            {{ $v->game_name }}
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
