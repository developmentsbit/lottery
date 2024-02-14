@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.contact_us')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.contact_us')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.contact_us')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section contact -->
<div class="container">
    <div class="row">
        <div class="wrapper">
            <div class="company-info">
                <h3>Thai Lotto3up</h3>
                <ul>
                    <li><i class="fa fa-road"></i>
                        359 Nonthaburi Road, Tha Sai Amphoe Mueang Nonthaburi, NONTHABURI 11000
                    </li>
                    <li><i class="fa fa-envelope"></i> info.thailotto3up@gmail.com</li>
                </ul>
            </div>
            <div class="contact">
                <h3>Get In Tuch</h3>
                <form id="contact-form">
                    <p>
                        <label>Name</label>
                        <input type="text" name="name" id="name" required>
                    </p>
                    <p>
                        <label>Company</label>
                        <input type="text" name="company" id="company">
                    </p>
                    <p>
                        <label>E-mail Address</label>
                        <input type="email" name="email" id="email" required>
                    </p>
                    <p>
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="phone">
                    </p>
                    <p class="full">
                        <label>Message</label>
                        <textarea name="message" rows="5" id="message"></textarea>
                    </p>
                    <p class="full">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- thai lottery section contact -->



@endsection

