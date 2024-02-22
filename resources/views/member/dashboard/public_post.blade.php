@extends('member.dashboard.master')
@section('member_dash_title')
Public Post
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
       Buy & Sell
    @endslot
    @slot('title3')
       Public Post
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Public Post
        </div>
        <div class="card-body">
            <table class="table table-borderd table-responsive-sm" id="myTable">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Added By</th>
                        <th>Post Type</th>
                        <th>Amount</th>
                        <th>Contact Type</th>
                        <th>Contact</th>
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
                            @php
                                $member = App\Models\Member::where('member_id',$v->member_id)->first();
                            @endphp
                            {{ $member->first_name.' '.$member->last_name }}
                        </td>
                        <td>
                            <span class="btn btn-sm @if($v->post_type == 'Buy') btn-info @else btn-danger @endif ">{{$v->post_type}}</span>
                        </td>
                        <td>
                            {{ $v->amount }}
                        </td>
                        <td>
                            {{ $v->contact_type }}
                        </td>
                        <td>
                            <a href="#" class="btn btn-dark btn-sm">Contact</a>
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
