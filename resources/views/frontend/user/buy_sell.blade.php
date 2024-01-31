@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.buy_sell')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.buy_sell')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.buy_sell')
    </div>
    <div class="container">
        <div class="row p-4">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card-text">
                    <a href="#">@lang('frontend.buy_request')</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card-text">
                    <a href="#">@lang('frontend.sell_dollar')</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title -->



@endsection

