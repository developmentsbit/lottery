@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.home')
@endsection
<!--page title -->
@section('body')

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
    <div class="carousel-item active">
      <img src="{{ asset('Frontend/image/slider-1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('Frontend/image/slider-2.jpg') }}" class="d-block w-100" alt="...">
    </div>
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
                <div class="col-lg-6 col-md-6 col-12 p-2" style="text-align: left;margin-top: -9px;">
                    <h4 style="margin: 0px;
    border-bottom: 3px solid #fff;
    padding: 5px;
    margin-top: 21px;
    margin-left: 32px;
    font-size: 29px;">Welcome To The Govt. Lottery Office</h4>
                    <div class="blog_single">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12" style="text-align: left;margin-top: -24px;">
                                <p style="font-size: 15px;">
                                Issuing lottery tickets etc. In Thailand, according to history, it began to exist in the reign of King Chulalongkorn, King Rama V, with a British foreigner named "Teacher Albaster" was the first to introduce the European lottery drawing style by calling it the "Lottery" by His Majesty King Chulalongkorn. Royal permission was given to the Royal Thai Chamberlain to issue lotteries for the first time in Thailand in 1874 on the occasion of His Majesty the King's birthday. The objective is to help foreign merchants who bring their products to be displayed in the museum at the Concadia Building in the Grand Palace. And later, during the reign of King Rama VI in the year 1917, which was during World War 1, the United Kingdom, England, which was a country on the Allied Powers. Intending to borrow money from Thailand to use in the war effort But cannot borrow directly from the Thai government. Because it will affect the budget of the National Patriotic Council of England. Therefore, the policy is to borrow money from the people by issuing lotteries. It received royal permission from His Majesty King Mongkut Klao.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section for post -->

<!-- thai goverment lottery online -->
<section class="section-box">
    <div class="container">
        <div class="section_title">
            <h1>Lottery Result</h1>
        </div>
        <div class="card-box">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card-item">
                    <div class="content">
                        <div class="imgBx">
                            <img src="https://www.thailotto.club/image_directory/logo/logo.png">
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
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card-item">
                    <div class="content">
                        <div class="imgBx">
                            <img src="https://www.thailotto.club/image_directory/logo/logo.png">
                            <h3>Bangkok Lottery Result</h3>
                            <h4>Draw Date: 02 Feb 2567</h4>
                        </div>
                        <div class="result-inner">
                            <div class="result-single">
                                <h4>6 Ball</h4>
                                <ul>
                                    <li>3 </li>
                                    <li>6 </li>
                                    <li>2 </li>
                                    <li>1 </li>
                                    <li>7 </li>
                                    <li>3 </li>
                                </ul>
                            </div>
                            <div class="result-single">
                                <h4>3 Ball</h4>
                                <ul>
                                    <li>0 </li>
                                    <li>6 </li>
                                    <li>3 </li>
                                </ul>
                            </div>
                            <div class="result-single">
                                <h4>2 Ball</h4>
                                <ul>
                                    <li>5 </li>
                                    <li>7 </li>
                                </ul>
                            </div>
                            
                            <div class="result-single pt-120 remain-time">
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
</section>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
    <div class="featuresSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="background: #104747;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/achive1.png" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>16600+</h2>
                                <h6>LIVE ONLINE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="background: #104747;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/achive2.png" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>183300+</h2>
                                <h6>TOTAL MEMBERS</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="background: #104747;padding: 23px 62px 0px 0px;margin-left: 50px;">
                        <div class="d-flex flex-row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/achive3.png" alt="" />
                            </div>
                            <div class="col-lg-8 col-md-8 col-12" style="padding: 30px 0px 0px 0px;">
                                <h2>13800+</h2>
                                <h6>MONTHLY REWARD</h6>
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
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon.png" alt="" />
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
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon3.png" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>No Comission On Winning</h2>
                                <p>There is no commission to win the lottery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon2.png" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Biggest Lottery Jackpots</h2>
                                <p>4 winners, 12 million people in the latest lottery</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon4.png" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Instant Payout System</h2>
                                <p>We have an immediate payment system for our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="d-flex flex-row">
                            <div class="col-lg-2 col-md-2 col-12">
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon6.png" alt="" />
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
                                <img src="https://www.thailotto.club/image_directory/about/ab-icon5.png" alt="" />
                            </div>
                            <div class="col-lg-10 col-md-10 col-12 text">
                                <h2>Performance Bonuses</h2>
                                <p>Bonuses based on contributions will be given to eligible applicants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- thai goverment lottery online -->

<!-- thai goverment lottery online -->
<section id="services">
    <div class="col-md-10 offset-1">
        <!-- Section Title !-->
        <div class="section-title">
            <h2>Bonus Level</h2>
            <p>We provide bonuses at various levels.</p>
        </div>
    </div>
    <!-- SERVICES !-->
    <div class="container">
        <div class="row grid" style="margin-top: 80px;">
            <!-- SERVICE 01 !-->
            <div class="col-xs-12 col-md-6 col-lg-4 element-item service01" data-category="service01">
                <!-- CARD SERVICE 01 !-->
                <div class="card" style="background: #043b35;border: none;">
                    <div class="circle point-blue"><p>Level</p><p>01</p></div>
                    <!-- CARD SERVICE IMAGE !--> 
                    <i class="fa-solid fa-coins blue"></i>
                    <!-- CARD TEXT !-->
                    <div class="card-block">
                        <h4 class="card-title">Refferal Bonus</h4>
                    </div>
                </div>
            </div>
            <!-- SERVICE 02 !-->
            <div class="col-xs-12 col-md-6 col-lg-4 element-item service02 service03" data-category="service02">
                <!-- CARD SERVICE 02 !-->
                <div class="card" style="background: #043b35;border: none;">
                    <div class="circle point-orange"><p>Level</p><p>02</p></div>
                    <!-- CARD SERVICE IMAGE !--> 
                    <i class="fa-solid fa-layer-group orange"></i>
                    <!-- CARD TEXT !-->
                    <div class="card-block">
                        <h4 class="card-title">Current Offer Bonus</h4>
                    </div>
                </div>
            </div>
            <!-- SERVICE 03 !-->
            <div class="col-xs-12 col-md-6 col-lg-4 element-item service01 service03" data-category="service03">
                <!-- CARD SERVICE 03 !-->
                <div class="card" style="background: #043b35;border: none;">
                    <div class="circle point-green"><p>Level</p><p>03</p></div>
                    <!-- CARD SERVICE IMAGE !--> 
                    <i class="fa-solid fa-chart-simple green"></i>
                    <!-- CARD TEXT !-->
                    <div class="card-block">
                        <h4 class="card-title">Affiliate Commission Bonus</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai goverment lottery online -->

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

@push('footer_script')
<!-- timer js -->
<script src="{{ asset('Frontend/timer.js') }}"></script>
<!-- timer js -->
@endpush

@endsection

