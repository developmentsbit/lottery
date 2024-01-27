@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.about_us')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.about_us')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.about_us')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section about -->
<section class="section_div p-4">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('frontend.thai_gov_lottery')
                </div>
                <div class="card-body">
                    <span>
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('frontend.thai_gov_lottery')
                </div>
                <div class="card-body">
                    <span>
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('frontend.thai_gov_lottery')
                </div>
                <div class="card-body">
                    <span>
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section about -->



@endsection

