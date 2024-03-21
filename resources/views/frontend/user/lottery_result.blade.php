@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.result')
@endsection
<!--page title -->
@section('body')

<style>
    #clockdiv {
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }
    #clockdiv > div {
        /* padding: 10px; */
        /* border-radius: 3px; */
        /* background: #00bf96; */
        display: inline-block;
        color: #fff !important;
        font-weight:bold !important;
    }
    #clockdiv div > span {
        padding: 9px;
        border-radius: 50%;
        background: #0093D3;
        display: inline-block;
        font-size: 18px;
        box-shadow: 3px 0px 3px 3px #0168fc;
    }

    /* Style for visible text */
    .smalltext {
        padding-top: 8px;
        padding-left: 3px;
        font-size: 16px;
    }
</style>

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
                              <h4>Draw Date: {{ ($params['result']->draw_date) }}</h4>
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
                                        {{ ($params['result']->next_draw_date) }}
                                    </h5>
                                        <div id="clockdiv">
                                            <div>

                                                <!-- Show No. of days -->
                                                <span class="days" id="day"></span>
                                                <div class="smalltext">Days</div>
                                                
                                            </div>
                                            <div>

                                                <!-- Show no.of hours -->
                                                <span class="hours" id="hour"></span>
                                                <div class="smalltext">Hours</div>
                                            </div>
                                            <div>

                                                <!-- Show no. of minutes -->
                                                <span class="minutes" id="minute"></span>
                                                <div class="smalltext">Minutes</div>
                                                
                                            </div>
                                            <div>

                                                <!-- Show seconds -->
                                                <span class="seconds" id="second"></span>
                                                <div class="smalltext">Seconds</div>
                                               
                                            </div>
                                        </div>
                                        <p id="demo"></p>
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

<script>

    // Getting formated date from date string
    let deadline = new Date(
        "{{ $params['draw_date'] }} 00:00:00"
    ).getTime();

    // Calling defined function at certain interval
    let x = setInterval(function () {

        // Getting current date and time in required format
        let now = new Date().getTime();

        // Calculating difference
        let t = deadline - now;

        // Getting values of days,hours,minutes, seconds
        let days = Math.floor(
            t / (1000 * 60 * 60 * 24)
        );
        let hours = Math.floor(
            (t % (1000 * 60 * 60 * 24)) /
                (1000 * 60 * 60)
        );
        let minutes = Math.floor(
            (t % (1000 * 60 * 60)) / (1000 * 60)
        );
        let seconds = Math.floor(
            (t % (1000 * 60)) / 1000
        );

        // Show the output time
        document.getElementById("day")
                .innerHTML = days;
        document.getElementById("hour")
                .innerHTML = hours;
        document.getElementById("minute")
                .innerHTML = minutes;
        document.getElementById("second")
                .innerHTML = seconds;

        // Show overtime output
        if (t < 0) {
            clearInterval(x);
            document.getElementById(
                "demo"
            ).innerHTML = "TIME UP";
            document.getElementById(
                "day"
            ).innerHTML = "0";
            document.getElementById(
                "hour"
            ).innerHTML = "0";
            document.getElementById(
                "minute"
            ).innerHTML = "0";
            document.getElementById(
                "second"
            ).innerHTML = "0";
        }
    }, 1000);
</script>

@endsection

