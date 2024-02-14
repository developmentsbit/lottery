@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.payout')
@endsection
<!--page title -->
@section('body')

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.payout')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.payout')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section payout -->
<section class="section p-4">
    <div class="container">
        <div class="row">
            <h4>WITHDRAWAL LIST</h4>
            <div class="col-lg-12 col-md-12 col-12">
                <table>
                    <tr>
                        <th>Date/Time</th>
                        <th>Member Name</th>
                        <th>Withdraw Amount</th>
                        <th>Withdraw Currency</th>
                        <th>Bank Information</th>
                        <th>Receiver Country</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>2021-12-28 07:27 pm</td>
                        <td>SAIFUL AMIN</td>
                        <td>444.00</td>
                        <td>USD</td>
                        <td>MUTUAL TRUST BANK LIMITED</td>
                        <td>Bangladesh</td>
                        <td>Complete</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section payout -->

@endsection

