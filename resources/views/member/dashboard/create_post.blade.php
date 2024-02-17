@extends('member.dashboard.master')
@section('member_dash_title')
Create Post
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
       Create Post
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Create Post
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('member.store_post') }}" enctype="multipart/form-data">
                @csrf
                <table class="table">
                    <tr>
                        <th>Post Type</th>
                        <td>
                            <select class="form-control form-control-sm" name="post_type" id="post_type" onchange="getMethodInfo();getOriginalAmount();" required>
                                <option value="">Select Post Type</option>
                                <option value="Buy">Buy</option>
                                <option value="Sell">Sell</option>
                            </select>
                            <div class="message mt-2">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onchange="return getOriginalAmount()">
                                <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td>
                            <div class="input-group">
                                {{-- <span class="input-group-append btn btn-dark" style="border-radius: 0px;"> --}}
                                    <select class="input-group-append btn btn-secondary" style="border-radius: 0px;" name="contact_type" id="contact_tpye" required>
                                        <option>Select One</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Whatsapp">Whatsapp</option>
                                    </select>
                                {{-- </span> --}}
                                <input type="number" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number" required>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

@endsection
