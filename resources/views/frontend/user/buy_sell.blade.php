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
</div>
<!-- page title -->




@endsection

