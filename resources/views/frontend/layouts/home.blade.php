@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.home')
@endsection
<!--page title -->
@section('body')

@php

use App\Models\photo_info;
use App\Models\welcomemessage;
use App\Models\youtubelive;

$slider = photo_info::where("slider",1)->orderBy('id','DESC')->get();

$welmessage = welcomemessage::get();
$youlive = youtubelive::get();

@endphp

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

<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @if(isset($slider))
          @foreach($slider as $key => $s)
          <div class="carousel-item @if(isset($key)) active @endif">
              <img src="{{asset('/Backend/img/photo_info')}}/{{$s->image}}" class="d-block w-100" alt="...">
          </div>
          @endforeach
          @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<!-- slider area -->

<!-- section for post -->
<section class="youtube_live_blog_post mt-4">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 p-2" style="text-align: left;margin-top: -9px;">
                    @if($welmessage)
                    @foreach($welmessage as $w)
                    <h4 class="blog_title">@if(config('app.locale') == 'en'){{$w->title ?: $w->title_bn}}@else {{$w->title_bn ?: $w->title}}@endif</h4>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12" style="text-align: left;margin-top: -24px;">
                                <p style="text-align: justify;">
                                <h4>@if(config('app.locale') == 'en'){!! $w->details ?: $w->details_bn !!}@elseif(config('app.locale') == 'bn'){!! $w->details_bn ?: $w->details !!}@endif</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-12" style="text-align: left">
                    @if($youlive)
                    @foreach($youlive as $y)
                    <h3 style="color: #fff;font-weight: 600;">Thai Lottery Live Draw</h3>
                    <p style="font-size: 19px;">( @if(config('app.locale') == 'en'){{$y->title ?: $y->title_bn}}@else {{$y->title_bn ?: $y->title}}@endif ) <span style="color: #ff2b2b">LIVE…</span></p>
                    <div class="youtube_blog_post">
                        <iframe width="500" height="315" src="{{$y->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section for post -->

<!-- thai goverment lottery online -->
<section class="section-box">
    <div class="container">
        <div class="row">
            <div class="section_title">
                <h1>Lottery Result</h1>
            </div>
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
                                    {{--<h5>Next Draw Date:
                                        {{ ($params['result']->next_draw_date) }}
                                    </h5>--}}
                                    <br>
                                    <h5>Next Draw Date :</h5>
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
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row p-2">
                        <div class="col-12 gif-section">
                            <img src="{{asset('Frontend/image/test.gif')}}" alt="">
                        </div>
                        <div class="col-12">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/3EbslociEzc?si=0iZ5GK-_rgQQF1kg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allow="autoplay" allowfullscreen ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
    <div class="featuresSection" style="padding: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 text-content">
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;overflow:hidden">
                        <div class="d-flex">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="{{asset('Frontend/image/achive1.png')}}" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>12220+</h2>
                                <h6><span style="color:#fff">&bull;</span>LIVE ONLINE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-content">
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;overflow:hidden">
                        <div class="d-flex">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="{{asset('Frontend/image/achive2.png')}}" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>18013+</h2>
                                <h6><span style="color:#fff">&bull;</span>TOTAL MEMBERS</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-content">
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;overflow:hidden">
                        <div class="d-flex">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="{{asset('Frontend/image/achive3.png')}}" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>13100+</h2>
                                <h6><span style="color:#fff">&bull;</span>MONTHLY REWARD</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
    <div class="featureSection" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="{{asset('Frontend/image/lotto1.png')}}" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Safe & Secure Playing</h2>
                                <p>All transactions are 100% safe and protected.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="{{asset('Frontend/image/lotto2.png')}}" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Instant Payout System</h2>
                                <p>We have an immediate payment system.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="{{asset('Frontend/image/lotto3.png')}}" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Dedicated Support</h2>
                                <p>Customer satisfaction insurance And full support</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="{{asset('Frontend/image/lotto4.png')}}" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Performance Bonuses</h2>
                                <p>Bonuses based on contributions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- thai goverment lottery online -->

<!-- thai lottery section about -->
<section class="section_div p-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 about-box">
                <div class="card">
                    <div class="card-header">
                        @lang('frontend.thai_gov_lottery')
                    </div>
                    <div class="card-body">
                        <span>
                            หวยไทยออก 3 ตัว 2 ครั้งต่อเดือน เวลาประมาณ 15.00 น. 1.หวยไทยเลขระหว่าง 0-9 หรือเลือก Quick Pick (QP) ให้คอมพิวเตอร์ลอตเตอรี่สุ่มเลือกหมายเลขของคุณ 2.เลือกประเภทการเดิมพัน มีห้าวิธีในการเล่นลอตเตอรีแห่งชาติ 3.เลือกจำนวนเงินที่คุณต้องการเดิมพันตั้งแต่ $.1 ถึง $100+
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 about-box">
                <div class="card">
                    <div class="card-header">
                        @lang('frontend.thai_gov_lottery')
                    </div>
                    <div class="card-body">
                        <span>
                            หวยไทยออก 3 ตัว 2 ครั้งต่อเดือน เวลาประมาณ 15.00 น. 1.หวยไทยเลขระหว่าง 0-9 หรือเลือก Quick Pick (QP) ให้คอมพิวเตอร์ลอตเตอรี่สุ่มเลือกหมายเลขของคุณ 2.เลือกประเภทการเดิมพัน มีห้าวิธีในการเล่นลอตเตอรีแห่งชาติ 3.เลือกจำนวนเงินที่คุณต้องการเดิมพันตั้งแต่ $.1 ถึง $100+
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 about-box">
                <div class="card">
                    <div class="card-header">
                        @lang('frontend.thai_gov_lottery')
                    </div>
                    <div class="card-body">
                        <span>
                            หวยไทยออก 3 ตัว 2 ครั้งต่อเดือน เวลาประมาณ 15.00 น. 1.หวยไทยเลขระหว่าง 0-9 หรือเลือก Quick Pick (QP) ให้คอมพิวเตอร์ลอตเตอรี่สุ่มเลือกหมายเลขของคุณ 2.เลือกประเภทการเดิมพัน มีห้าวิธีในการเล่นลอตเตอรีแห่งชาติ 3.เลือกจำนวนเงินที่คุณต้องการเดิมพันตั้งแต่ $.1 ถึง $100+
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section about -->

@push('footer_script')
<!-- Adding JavaScript code -->
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
@endpush

@endsection

