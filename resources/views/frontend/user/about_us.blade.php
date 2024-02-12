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

@php

use App\Models\aboutus;

$data = aboutus::get();

@endphp

<section class="p-4" style="background: #043b35">
    <div class="container" style="background: #104747;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <img src="{{ asset('Backend/settings/') }}/{{ $settings->logo }}" alt="">

        @if($data)
        @foreach($data as $d)
        <p>
        @if(config('app.locale') == 'en'){!! $d->details ?: $d->details_bn !!}@elseif(config('app.locale') == 'bn'){!! $d->details_bn ?: $d->details !!}@endif
        </p>
        @endforeach
        @endif

    </div>
</section>
<!-- thai lottery section about -->



@endsection

