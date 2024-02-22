@extends('member.dashboard.master')
@section('member_dash_title')
Win Balance History
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
       Transaction
    @endslot
    @slot('title3')
       Win Balance History
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Win Balance History
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-responsive-sm" id="myTable">
                    <thead>
                        <tr>
                            <th>Date & Time</th>
                            <th>Transaction Type</th>
                            <th>Payment Method</th>
                            <th>Payment Account</th>
                            <th>Trx ID</th>
                            <th>Document</th>
                            <th>Amount</th>
                            <th>Vat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($params['data']))
                        @foreach ($params['data'] as $v)
                        <tr>
                            <td>
                                {{ App\Traits\Date::DbToOriginal('-',$v->date) }} <br> {{ App\Traits\Date::twelveHrTime($v->time) }}
                            </td>
                            <td>
                                @if($v->transaction_type == 5)
                                Cash In
                                @elseif($v->transaction_type == 8)
                                    @if($v->transfer_to != NULL)
                                    @php
                                    $transfer_to = App\Models\Member::where('member_id',$v->transfer_to)->first();
                                    @endphp
                                    Transfer To  {{ $transfer_to->first_name.' '.$transfer_to->last_name }}
                                    @else
                                    @php
                                    $transfer_in = App\Models\Member::where('member_id',$v->transfer_from)->first();
                                    @endphp
                                    Transfer In From  {{ $transfer_in->first_name.' '.$transfer_in->last_name }}
                                    @endif
                                @elseif($v->transaction_type == 4)
                                Withdraw
                                @elseif($v->transaction_type == 6)
                                Cash To Win
                                @elseif($v->transaction_type == 7)
                                Win To Cash
                                @endif
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
                                @if($v->transaction_type == 5)
                                {{ $v->winbalance }}
                                @elseif($v->transaction_type == 8)

                                @if($v->transfer_to != NULL)
                                {{ ($v->winbalance_transfer - $v->vat) * -1 }}
                                @else
                                {{ $v->winbalance }}
                                @endif

                                @elseif($v->transaction_type == 4)
                                {{ $v->withdraw }}
                                @elseif($v->transaction_type == 6)
                                {{ $v->winbalance }}
                                @elseif($v->transaction_type == 7)
                                {{ $v->winbalance + $v->vat }}
                                @endif
                            </td>
                            <td>
                                @if($v->transaction_type == 6)
                                @else
                                {{ $v->vat }}
                                @endif
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
</div>


@endsection
