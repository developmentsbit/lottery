@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.award_prize')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.award_prize')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.award_prize')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section award prize -->
<section class="section p-4">
    <div class="container">
        <div class="row">
            <h1>Award Prize</h1>
            <div class="col-lg-12 col-md-12 col-12">
                <table style="width: 100%;" class="table-table-bordered table-striped">
                    <tr>
                        <th>Game & Bet Amount</th>
                        <th>Win Amount</th>
                        <th>Discount</th>
                    </tr>
                    <tr>
                        <td>1st Prize Six Digit Direct Bet Amount ($x1)</td>
                        <td>$-2500</td>
                        <td rowspan="2">40%</td>
                    </tr>
                     <tr>
                        <td>Six Digit Rumbal Bet Amount ($x1)</td>
                        <td>$-400</td>
                    </tr>
                    <tr>
                        <td>3up Direct Bet Amount ($x1)</td>
                        <td>$-350</td>
                        <td rowspan="2">30%</td>
                    </tr>
                     <tr>
                        <td>3up Rumbal Bet Amount ($x1)</td>
                        <td>$-60</td>
                    </tr>
                     <tr>
                        <td>2up Direct Bet Amount ($x1)</td>
                        <td>$-80</td>
                        <td rowspan="2">15%</td>
                    </tr>
                     <tr>
                        <td>2up Rumbal Bet Amount ($x1)</td>
                        <td>$-40</td>
                    </tr>
                    <tr>
                        <td>2 Down Direct Bet Amount ($x1)</td>
                        <td>$-60</td>
                        <td rowspan="2">15%</td>
                    </tr>
                     <tr>
                        <td>2 Down Rumbal Bet Amount ($x1)</td>
                        <td>$-40</td>
                    </tr>
                    <tr>
                        <td>1 of Single Digit Bet Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>

                     <tr>
                        <td>1 of 2up Single Digit Bet Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1 of 2down Single Digit Bet Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>
                        <tr>
                        <td>3up Game Total Bet Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2up Game Total Bet Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2down Game Total Bet Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>


                </table>
            </div>

        </div>
    </div>


</section>
<!-- thai lottery section about -->

@endsection

