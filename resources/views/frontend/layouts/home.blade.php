@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.home')
@endsection
<!--page title -->
@section('body')

<!-- slider area -->
<section class="carousel">
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
            <h5>Slide Title</h5>
            <p>Slide Sub Title</p>
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
</section>
<!-- slider area -->

<!-- sponsor image -->
<section class="sponsor_image text-center">
    <img src="{{ asset('Frontend/image/thai_lottery_sponsor.png') }}" alt="" srcset="" class="img-fluid">
</section>
<!-- sponsor image -->


<!-- thai goverment lottery online -->
<section class="section_div">
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
</section>
<!-- thai goverment lottery online -->



<!-- thai goverment lottery online -->
<section class="section_div_blue">
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
</section>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
<section class="section_div_black">
    <div class="container-fluid">
        <div class="section-title pt-2">
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
</section>
<!-- thai goverment lottery online -->


<!-- section for post -->
<section class="youtube_live_blog_post mt-4">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12" style="text-align: left">
                    <h4>@lang('frontend.thai_lotter_draw_live')</h4>
                    <div class="youtube_blog_post">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/lplVzgRdoCc?si=e1i8iM0YU3QQI3Gr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 p-2" style="text-align: left">
                    <h4 style="margin: 0px;">@lang('frontend.thai_lottery_draw_post')</h4>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-9" style="text-align: left;">
                                <a>
                                    <h4>Thai Goverment Lottery Office Draw on 2 May 2024</h4>
                                </a>
                                <p>
                                    Government Lottery Office The government lottery prize will be drawn at the prize draw building. The Government Lottery Office, Nonthaburi Road, Mueang Nonthaburi District Nonthaburi Province, And the awarding is in accordance with the international standard ISO 9001: 2
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <img src="{{ asset('Frontend/image/post_image_19.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-9" style="text-align: left;">
                                <a>
                                    <h4>Thai Goverment Lottery Office Draw on 2 May 2024</h4>
                                </a>
                                <p>
                                    Government Lottery Office The government lottery prize will be drawn at the prize draw building. The Government Lottery Office, Nonthaburi Road, Mueang Nonthaburi District Nonthaburi Province, And the awarding is in accordance with the international standard ISO 9001: 2
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <img src="{{ asset('Frontend/image/post_image_19.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section for post -->


<!-- thai lottery section about -->
<section class="section_div p-4">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('frontend.thai_gov_lottery')
                </div>
                <div class="card-body">
                    <span>
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
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
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
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
                        Thai Lottery with 3up drawings are held twice a month at approximately 03:00 PM,
                        1.Thai Lottery numbers between 0-9 or select Quick Pick (QP) for the Lottery computer to randomly select your numbers.
                        2.Select a bet type.There are five different ways to play National Lottery
                        3.Select the amount you’d like to wager from $.1 to $100+
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section about -->



@endsection

