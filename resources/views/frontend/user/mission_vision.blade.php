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

<section class="p-4" style="background: #8458B3">
    <div class="container" style="background: #51297b;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <div class="row">
           

            <div class="col-md-12 col-sm-12 col-lg-12" style="margin-top:7%;">
                <div class="blog_text">
                    <h3>Vision & Mission</h3>
                </div>
          <p>Service that meets international standards and the use of information technology for maximum benefit Including making agreements to provide services (Service Level Agreement: SLA) - Network Organization management, focusing on teamwork, coordination, building connections, integration, including the use of information technology. Come help with management. Creating indicators to set clear and evaluable goals as well as creating the image of the office (Brand)
Take social responsibility with care (Corporate Social Responsibility)
Carry out activities and support part of the budget from lottery sales. Giving back to the people and society in various forms such as scholarships, etc. – ready to participate in sustainable social development.</p> 
</div>
        </div>
        </div>

      
</section>
<!-- thai lottery section about -->



@endsection

