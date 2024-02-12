@extends('member.dashboard.master')
@section('member_dash_title')
Cash In
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
            Cash In
        </div>
        <div class="card-body">
            <table class="table table-borderd" id="myTable">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Payment Method</th>
                        <th>Payment Account</th>
                        <th>Trx ID</th>
                        <th>Document</th>
                        <th>Amount</th>
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
                            @if(isset($v->payment_type))
                            @if(config('app.locale') == 'en')
                            {{ $v->method->method_name ?: $v->method->name_bn}}
                            @else
                            {{ $v->method->method_name_bn ?: $v->method->name}}
                            @endif
                            @endif
                        </td>
                        <td>
                            {{ $v->payment_account }}
                        </td>
                        <td>
                            {{ $v->transaction_id }}
                        </td>
                        <td>
                            @if($v->document != NULL)
                            <img src="{{ asset('CashInDoc') }}/{{ $v->document }}" alt="" style="height: 60px;">
                            @endif
                        </td>
                        <td>
                            {{ $v->balance }}
                        </td>
                        <td>
                            @if($v->deleted_at == NULL)
                                @if($v->status == 0)
                                <span class="badge bg-warning">Pending</span>
                                @else
                                <span class="badge bg-success">Approved</span>
                                @endif
                            @else
                                <span class="badge bg-danger">Rejected</span>
                            @endif
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
