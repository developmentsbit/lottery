@extends('member.dashboard.master')
@section('member_dash_title')
Referral History
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
       Cash Referral
    @endslot
    @slot('title3')
       Referral History
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Referral History
        <div class="card-body">
            <table class="table table-borderd" id="myTable">
                <thead>
                    <tr>
                        <th>Member ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Nationality</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($params['data']))
                    @foreach ($params['data'] as $v)
                    <tr>
                        <td>
                            {{$v->member_id}}
                        </td>
                        <td>
                            {{ $v->first_name.' '.$v->last_name }}
                        </td>
                        <td>
                            {{ $v->mobile_no }}
                        </td>

                        <td>
                            {{ $v->gender}}
                        </td>
                        <td>
                            {{ $v->email }}
                        </td>
                        <td>
                            {{ $v->country }}
                        </td>
                        <td>
                            {{ $v->nationality }}
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
