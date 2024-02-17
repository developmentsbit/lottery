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

<!-- slider area -->
<!-- <section class="carousel">
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> --}}
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
    </div>
    <div class="carousel-inner">
        {{-- <div class="carousel-item active">
        <img src="{{ asset('Frontend/image/slider-1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Slide Title</h5>
            <p>Slide Sub Title</p>
        </div>
        </div> --}}
        <div class="carousel-item active">
        <img src="{{ asset('Frontend/image/slider-2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color: #fff;font-weight:bold;margin-bottom: 0px;">THAI NATIONAL LOTTERY</h1>
            <h4 style="color: #fff;padding: 78px;margin-top: -59px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, accusantium.</h4>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section> -->

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    @if(isset($slider))
    @foreach($slider as $s)
    <div class="carousel-item active">
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
<!-- slider area -->

<!-- sponsor image -->
<!-- <section class="sponsor_image text-center">
    <img src="{{ asset('Frontend/image/thai_lottery_sponsor.png') }}" alt="" srcset="" class="img-fluid">
</section> -->
<!-- sponsor image -->


<!-- thai goverment lottery online -->
<!-- <section class="section_div">
    <div class="container-fluid">
        <div class="section-title pt-2">
            <h4 class="text-light">@lang('frontend.thai_gov_lottery')</h4>
        </div>
        <div class="section_body">
            <div class="container">
                <b class="text-light">@lang('frontend.thai_national_lotter_result') 17 Jan 2024</b>
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>First Prize</b>
                                    <div class="prize_number">
                                        <span>105799</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="container">
                            <div class="section_title">
                                <b class="text-light">@lang('frontend.next_draw')</b><br>
                                    <b class="text-light">THURSDAY (2024/02/01)</b>
                            </div>
                            <div id="countdown">
                              <ul>
                                <li><span id="days"><br></span><span id="timer_sub">days</span></li>
                                <li><span id="hours"><br></span><span id="timer_sub">Hours</span></li>
                                <li><span id="minutes"><br></span><span id="timer_sub">Minutes</span></li>
                                <li><span id="seconds"><br></span><span id="timer_sub">Seconds</span></li>
                              </ul>
                            </div>
                            <div id="content" class="emoji">
                              <span>🥳</span>
                              <span>🎉</span>
                              <span>🎂</span>
                            </div>
                            <div class="play_now text-center">
                                <a href="#" class="btn btn-sm btn-outline-info">@lang('frontend.play_now')</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- thai goverment lottery online -->



<!-- thai goverment lottery online -->
<!-- <section class="section_div_blue">
    <div class="container-fluid">
        <div class="section-title pt-2">
            <h4 class="text-light">@lang('frontend.global_weekly_lottery_online')</h4>
        </div>
        <div class="section_body">
            <div class="container">
                <b class="text-light">@lang('frontend.global_lottery_result') 17 Jan 2024</b>
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>5 Ball</b>
                                    <div class="prize_number bg-light" style="color: black">
                                        <span>7-01-25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="container">
                            <div class="section_title">
                                <b class="text-light">@lang('frontend.next_draw')</b><br>
                                    <b class="text-light">THURSDAY (2024/02/01)</b>
                            </div>
                            <div id="countdown2">
                              <ul>
                                <li><span id="days2"><br></span><span id="timer_sub">days</span></li>
                                <li><span id="hours2"><br></span><span id="timer_sub">Hours</span></li>
                                <li><span id="minutes2"><br></span><span id="timer_sub">Minutes</span></li>
                                <li><span id="seconds2"><br></span><span id="timer_sub">Seconds</span></li>
                              </ul>
                            </div>
                            <div id="content2" class="emoji">
                              <span>🥳</span>
                              <span>🎉</span>
                              <span>🎂</span>
                            </div>
                            <div class="play_now text-center">
                                <a href="#" class="btn btn-sm btn-outline-dark">@lang('frontend.play_now')</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
<!-- <section class="section_div_black">
    <div class="container-fluid">
        <div class="sectiontitle pt-2">
            <h4 class="text-light">@lang('frontend.bingo_lotto_3d')</h4>
        </div>
        <div class="section_body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left-title text-left">
                            <h5 class="text-light">@lang('frontend.bingo_lotter_morning_result')</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>5 Ball</b>
                                    <div class="prize_number bg-light" style="color: black">
                                        <span>7-01-25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left-title text-left">
                            <h5 class="text-light">@lang('frontend.bingo_lotter_morning_result')</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-12 p-2">
                                <div id="prize_box">
                                    <b>5 Ball</b>
                                    <div class="prize_number bg-light" style="color: black">
                                        <span>7-01-25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 mt-4">
                        <div class="container">
                            <div class="section_title">
                                <b class="text-light">@lang('frontend.next_draw')</b><br>
                                    <b class="text-light">THURSDAY (2024/02/01)</b>
                            </div>
                            <div id="countdown3">
                              <ul>
                                <li><span id="days3"><br></span><span id="timer_sub">days</span></li>
                                <li><span id="hours3"><br></span><span id="timer_sub">Hours</span></li>
                                <li><span id="minutes3"><br></span><span id="timer_sub">Minutes</span></li>
                                <li><span id="seconds3"><br></span><span id="timer_sub">Seconds</span></li>
                              </ul>
                            </div>
                            <div id="content3" class="emoji">
                              <span>🥳</span>
                              <span>🎉</span>
                              <span>🎂</span>
                            </div>
                            <div class="play_now text-center">
                                <a href="#" class="btn btn-sm btn-outline-dark">@lang('frontend.play_now')</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- thai goverment lottery online -->

<!-- section for post -->
<section class="youtube_live_blog_post mt-4">
    <div class="section">
        <div class="container">
            <div class="row">
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
                <div class="col-lg-6 col-md-6 col-12 p-2" style="text-align: left;margin-top: -9px;">
                    @if($welmessage)
                    @foreach($welmessage as $w)
                    <h4 style="margin: 0px;border-bottom: 3px solid #fff;padding: 5px;margin-top: 21px;margin-left: 32px;font-size: 29px;">@if(config('app.locale') == 'en'){{$w->title ?: $w->title_bn}}@else {{$w->title_bn ?: $w->title}}@endif</h4>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12" style="text-align: left;margin-top: -24px;">
                                <p style="font-size: 16px;">
                                @if(config('app.locale') == 'en'){!! $w->details ?: $w->details_bn !!}@elseif(config('app.locale') == 'bn'){!! $w->details_bn ?: $w->details !!}@endif
                                </p>
                            </div>
                        </div>
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
                                    <h5>Next Draw Date: 01 Mar <?php echo date('Y'); ?> </h5>
                                    <ul>
                                        <li><span id="day"></span></li><span>Days</span>
                                        <li><span id="hour"></span></li><span>Hours</span>
                                        <li><span id="minute"></span></li><span>Minutes</span>
                                        <li><span id="second"></span></li><span>Seconds</span>
                                    </ul>
                                </div>
                            </div>
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
                        <div class="col-12"><br>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ttuXcVMgiGg?si=mP-OLDUUHLqjgMc7?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
    <div class="featuresSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 text-content">
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
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
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
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
                    <div class="card" style="background: #51297b;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
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
    <div class="featureSection">
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
            <div class="col-lg-4 col-md-4 col-12">
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
            <div class="col-lg-4 col-md-4 col-12">
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
            <div class="col-lg-4 col-md-4 col-12">
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
<!-- timer js -->
<script src="{{ asset('Frontend/timer.js') }}"></script>
<!-- timer js -->

<script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "03/01/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("day").innerText = Math.floor(distance / (day)),
          document.getElementById("hour").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minute").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("second").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
</script>
@endpush

@endsection

