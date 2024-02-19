@extends('member.dashboard.master')
@section('member_dash_title')
Your Post
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
       Your Post
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Your Post
        </div>
        <div class="card-body">
            <table class="table table-borderd" id="myTable">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Post Type</th>
                        <th>Amount</th>
                        <th>Contact Type</th>
                        <th>Contact Number</th>
                        <th>Status</th>
                        <th>Action</th>
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
                            {{$v->post_type}}
                        </td>
                        <td>
                            {{ $v->amount }}
                        </td>
                        <td>
                            {{ $v->contact_type }}
                        </td>
                        <td>
                            {{$v->contact_number}}
                        </td>
                        <td>
                            @if($v->status == 1)
                            <a class="btn btn-sm btn-success" href="{{ route('member.change_post_status',$v->id) }}">Active</a>
                            @else
                            <a class="btn btn-sm btn-danger" href="{{ route('member.change_post_status',$v->id) }}">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('member.post_delete',$v->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
