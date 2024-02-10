@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.mission_vision')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.mission_vision')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.mission_vision')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section about -->

<section class="p-4" style="background: #043b35">
    <div class="container" style="background: #104747;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 blog_content">
                <img src="{{asset('frontend/image/2.jpg')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="blog_text">
                    <h3>Vision</h3>
                </div>
                <p>- International standard service And the most useful use of information technology As well as service level agreement : SLA - Network Organization Management (Network Organization) with a focus on teamwork, coordination, connection building, integration, including the introduction of information technology to help with management. Creating indicators to set clear and evaluation goals as well asCreate an image of the office (Brand) <span style="color:red">Corporate Social Responsibility</span> Carry out activities and support part of the lottery sales Return to people and society in various forms such as scholarships, etc. - Ready to contribute to sustainable social development</p>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6" style="margin-top:7%;">
                <div class="blog_text">
                    <h3>Mission</h3>
                </div>
                <p>Produce, distribute, award, pay prizes and create new forms of business continuously at the international level. To enhance the state revenue Promote support for public benefit activities To help society sustainably, develop organizations, personnel, technology to be up to date, manage internationally according to good governance.</p>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 blog_content" style="margin-top:7%;">
                <img src="{{asset('frontend/image/1.jpg')}}" alt="">
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 blog_content" style="margin-top:7%;">
                <img src="{{asset('frontend/image/3.jpg')}}" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6" style="margin-top:7%;">
                <div class="blog_text">
                    <h3>Core values (CORE VALUE)</h3>
                </div>
                <p><span style="color:red">“CLEAR”: 5 Goodness “ Team Goodness, Goodwill, Good Work, Good Relations ”</span><br>Collaboration: Collaboration ( Good Team ) means good cooperation with various departments. Inside and outside the organization. Learning and growth : Learning and growing ( Ambition ) means seeking opportunities for self-learning and development and the organization to be up to date, always expert and progressive. Ethics : Morality and ethics ( Goodwill ) means honest, fair, transparent, accurate and verifiable. Accountability : Responsibility ( Good job ) means committed to achieving goals and having public mental responsibility. Social Responsibility Community and Environment Relationship : Build good relationships ( Good relationships ) means build and maintain good relationships. Have a service mind with customers, partners and stakeholders. “ Help citizens strengthen the state. Stand fair ” Emblem</p>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6" style="margin-top:7%;">
                <div class="blog_text">
                    <h3>Managed according to good governance (GOOD GOVERNANCE & TRUST)</h3>
                </div>
                <p>Is an organization that operates with transparency, reliability It is accepted by the people and society.</p>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 blog_content" style="margin-top:7%;">
                <img src="{{asset('frontend/image/4.PNG')}}" alt="">
            </div>

        </div>
    </div>
</section>
<!-- thai lottery section about -->



@endsection

