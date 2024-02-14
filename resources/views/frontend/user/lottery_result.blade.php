@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.result')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.result')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.result')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section result -->
<div class="container">
  <div class="row">
  <section class="section-box">
    <div class="container">
        <div class="row">
            <div class="card-box">
              <div class="col-lg-6 col-md-6 col-12">
                  <div class="card-item">
                      <div class="content">
                          <div class="imgBx">
                              <img src="{{ asset('Backend/settings/455602170.png') }}">
                              <h3>National Lottery Result</h3>
                              <h4>Draw Date: 01 Feb 2567</h4>
                          </div>
                          <div class="result-inner">
                              <div class="result-single">
                                  <h4>1st Prize</h4>
                                  <ul>
                                      <li>6 </li>
                                      <li>0 </li>
                                      <li>7 </li>
                                      <li>0 </li>
                                      <li>6 </li>
                                      <li>3 </li>
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>3Up</h4>
                                  <ul>
                                      <li>0 </li>
                                      <li>6 </li>
                                      <li>3 </li>
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>2Up</h4>
                                  <ul>
                                      <li>6 </li>
                                      <li>3 </li>
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>2Down</h4>
                                  <ul>
                                      <li>0 </li>
                                      <li>9 </li>
                                  </ul>
                              </div>
                              <div class="result-single pt-20 remain-time">
                                  <h5>Next Draw Date:
                                      <span>16 Feb 2567 </span>
                                  </h5>
                                  <ul>
                                      <li id="day">10</li><span> D</span>
                                      <li id="hour">16</li><span> H</span>
                                      <li id="min">15</li><span> M</span>
                                      <li id="sec">0</li><span> S</span>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
  </div>
</div>
<!-- thai lottery section result -->



@endsection

