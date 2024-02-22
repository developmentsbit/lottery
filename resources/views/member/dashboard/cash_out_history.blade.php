@extends('member.dashboard.master')
@section('member_dash_title')
Cash Out
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
       Cash Out
    @endslot
    @slot('title3')
       Cash Out History
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Cash Out History
        <div class="card-body">
            <table class="table table-borderd table-responsive-sm" id="myTable">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Payment Method/Agent</th>
                        <th>Payment Account</th>
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
                            {{ App\Traits\Date::DbToOriginal('-',$v->date) }} || {{ App\Traits\Date::twelveHrTime($v->time) }}
                        </td>
                        <td>
                            @if(isset($v->payment_type))
                            @if(config('app.locale') == 'en')
                            {{ $v->method->method_name ?: $v->method->name_bn}}
                            @else
                            {{ $v->method->method_name_bn ?: $v->method->name}}
                            @endif

                            @elseif(isset($v->agent_id))
                            @php
                                $user = App\Models\User::find($v->agent_id);
                            @endphp
                            {{ $user->name }}
                            @endif
                        </td>
                        <td>
                            {{ $v->payment_account }}
                        </td>

                        <td>
                            ${{ $v->withdraw -  $v->vat}}
                        </td>
                        <td>
                            {{ $v->vat }}
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
