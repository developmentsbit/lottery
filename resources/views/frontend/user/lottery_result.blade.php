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
                        @if(isset($params['result']))
                          <div class="imgBx">
                              <img src="{{ asset('Backend/settings') }}/{{ $settings->logo }}">
                              <h3>National Lottery Result</h3>
                              <h4>Draw Date: {{ App\Traits\Date::DbToOriginal('-',$params['result']->draw_date) }}</h4>
                          </div>
                          <div class="result-inner">
                              <div class="result-single">
                                  <h4>1st Prize</h4>
                                  @php
                                      $first_prize = App\Traits\Numbers::split($params['result']->first_prize);
                                      $three_up = App\Traits\Numbers::split($params['result']->three_up);
                                      $two_up = App\Traits\Numbers::split($params['result']->two_up);
                                      $two_down = App\Traits\Numbers::split($params['result']->two_down);
                                  @endphp
                                  <ul>
                                    @for ($i = 0; $i < count($first_prize); $i++)
                                        <li>{{ $first_prize[$i] }} </li>
                                    @endfor
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>3Up</h4>
                                  <ul>
                                    @for ($i = 0; $i < count($three_up); $i++)
                                    <li>{{ $three_up[$i] }} </li>
                                @endfor
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>2Up</h4>
                                  <ul>
                                    @for ($i = 0; $i < count($two_up); $i++)
                                    <li>{{ $two_up[$i] }} </li>
                                @endfor
                                  </ul>
                              </div>
                              <div class="result-single">
                                  <h4>2Down</h4>
                                  <ul>
                                    @for ($i = 0; $i < count($two_down); $i++)
                                    <li>{{ $two_down[$i] }} </li>
                                @endfor
                                  </ul>
                              </div>
                              <div class="result-single pt-20 remain-time">
                                  <h5>Next Draw Date:
                                    {{ App\Traits\Date::DbToOriginal('-',$params['result']->draw_date) }}
                                  </h5>
                                  {{-- <ul>
                                      <li id="day">10</li><span> D</span>
                                      <li id="hour">16</li><span> H</span>
                                      <li id="min">15</li><span> M</span>
                                      <li id="sec">0</li><span> S</span>
                                  </ul> --}}
                              </div>
                          </div>
                          @else
                          <br>
                          <h3 class="text-light">No Result Found !</h3>
                          @endif
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

