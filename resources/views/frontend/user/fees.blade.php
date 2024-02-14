@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.fees')
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
th {
  background: #8458B3;
}

tr:nth-child(even) {
  background-color: #51297b;
}
h2{
    color: #fff;
}
</style>

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.fees')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.fees')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section fees -->

<section class="p-4" style="background: #8458B3">
    <div class="container" style="background: #51297b;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <table>
            <h2>Our Fees</h2>
            <tr>
                <th>Account Renew Fee $3</th>
                <th>Verification Fee $3.00</th>
                <th>Refferal Bonus $1.00</th>
                <th>Affiliation Bonus 2.00%</th>
            </tr>
        </table>
        <br>
        <br>
        <table>
            <tr>
                <th>Balance Transfer Fees</th>
                <th>Withdrawal Fees</th>
                <th>Cash In Fees</th>
                <th>Agent Fees & Commission</th>
            </tr>
            <tr>
                <td>Cash Balance Transfer 3.00%</td>
                <td>Bank Withdrawal Fee 7.00%</td>
                <td>Bank Cash In Fee 1.00%</td>
                <td>Agent to Agent Balance Transfer Fee 1.00%</td>
            </tr>
            <tr>
                <td>Win Balance Transfer 2.00%</td>
                <td>Skrill Withdrawal Fee 9.00%</td>
                <td>Skrill Cash In Fee 0.00%</td>
                <td>Agent to Win Balance Transfer Commission 4.00%</td>
            </tr>
            <tr>
                <td>Cash To Win Transfer 1.00%</td>
                <td>Netteler Withdrawal Fee 9.00%</td>
                <td>Netteler Cash In Fee 0.00%</td>
                <td>Agent to Cash Balance Transfer Commission 4.00%</td>
            </tr>
            <tr>
                <td>Win To Cash Transfer 1.00%</td>
                <td>Paypal Withdrawal Fee 9.00%</td>
                <td>Paypal Cash In Fee 1.00%</td>
                <td>Personal to Agent Transfer Commission 3.00%</td>
            </tr>
            <tr>
                <td>Personal to Agent Transfer Fee 8.00%</td>
                <td>Perfect Money Withdrawal Fee 9.00%</td>
                <td>Perfect Money Cash In Fee 0.00%</td>
                <td>Yearly Maintenance Fee 5.00$</td>
            </tr>
        </table>
    </div>
</section>
<!-- thai lottery section fees -->



@endsection

