<!DOCTYPE html>
<html lang="en"style="background: #8458B3;">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> @yield('page_title') - Thai Government Lottery</title>
  <link rel="icon" href="{{ asset('Backend/settings/') }}/{{ $settings->favicon }}" type="image/gif" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="title" content="Thai Government Lottery">
  <meta name="description" content="359 Nonthaburi Road, Tha Sai Amphoe Mueang Nonthaburi, NONTHABURI 11000">
  <meta name="robots" content="index, follow">
  <meta name="msvalidate.01" content="121EC13E8C812735A798174D5207138F" />
  <meta name="keywords" content="thailotto3up">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <!-- font awsome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/svg-with-js.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-font-face.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v5-font-face.min.css">
    <!-- font awsome css -->

    <!-- toastr css -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- toastr css -->

    <!-- style csss -->
    <link rel="stylesheet" href="{{ asset('Frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/timer.scss') }}">
    <!-- style csss -->

    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- font css -->

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- jqyery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    @if(config('app.locale') == 'bn')
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body, h1, h2, h3, h4, h5, h6{
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
    @endif

</head>
<body>
    <div class="uk-background-muted">
    <div class=" uk-position-z-index" uk-sticky="start: 100; animation: uk-animation-slide-top" style="z-index: 999 !important;">
    <!-- header start from here -->
    <section class="header">
        <div class="container-fluid">
            <div class="header__wrapper">
                <div class="row">
                  {{-- <div class="col-lg-8 col-md-8 col-12 header-text">
                      <span>The Government Approved 100% Trusted Online Betting Website</span>
                  </div> --}}
                  <!-- <div class="col-lg-12 col-md-12 col-12 header-info"><i class="fa-regular fa-envelope"></i> Any Question/ Any Inforamtion: <span style="color:#000;">info.thailotto3up@gmail.com</span></div> -->
                    <div class="col-lg-4 col-md-4 col-7">
                        <div class="logo__header">
                            <img src="{{ asset('user_logo.jpg') }}" alt="" class="img-fluid" style="max-height:100px">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-5">
                        <div class="login_register_area">
                            <ul class="header_side_nav">
                            <!--    <li class="nav-item dropdown">-->
                            <!--        <form method="post" action="{{url('changeLocale')}}" id="changeLocale">-->
                            <!--            @csrf-->
                            <!--            <input type="hidden" id="locale" name="locale" value="">-->
                            <!--            @if(config('app.locale') == 'en')-->
                            <!--        <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">-->
                            <!--            <img src="{{asset('Backend')}}/img/flags/us.png" alt="English" id="flag_up">-->
                            <!--        @elseif(config('app.locale') == 'bn')-->
                            <!--        <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">-->
                            <!--            <img src="{{asset('Backend')}}/img/flags/bd_big.png" alt="English" id="flag_up">-->
                            <!--            @endif-->
                            <!--        </a>-->
                            <!--        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">-->
                            <!--            <a class="dropdown-item" id="submitLoacaleEn" onclick="submitLoacle();">-->
                            <!--                <img src="{{asset('Backend')}}/img/flags/us.png" alt="English" width="20" class="align-middle me-1" />-->
                            <!--                <span class="align-middle">English</span>-->
                            <!--            </a>-->
                            <!--            <a class="dropdown-item" id="submitLoacaleBn" onclick="submitLoacle();">-->
                            <!--                <img src="{{asset('Backend')}}/img/flags/bd_big.png" alt="English" width="20" class="align-middle me-1" />-->
                            <!--                <span class="align-middle">বাংলা</span>-->
                            <!--            </a>-->

                            <!--        </div>-->
                            <!--    </form>-->
                            <!--</li>-->
                            @if(Auth::guard('member')->check())
                            <li>
                                <a href="{{ route('member.dashboard') }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i> Dashboard
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('member.login') }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-user"></i> @lang('frontend.login')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('member.registration') }}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-users"></i> @lang('frontend.register')
                                </a>
                            </li>
                            @endif
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header end here -->

    <!-- nav area start -->
    <section class="navigation">
        <div class="nav-container">
            <div class="row">
            <nav>
              <!-- <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div> -->
              <ul class="nav-list">
                <li>
                  <a class="{{request()->Is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">@lang('frontend.home')</a>
                </li>
                <li>
                  <a href="#!">About</a>
                  <ul class="nav-dropdown">
                    <li>
                      <a class="{{request()->Is('AboutUs') ? 'active' : ''}}" aria-current="page" href="{{ url('AboutUs') }}">@lang('frontend.about_us')</a>
                    </li>
                    <li>
                      <a class="{{request()->Is('VisionMission') ? 'active' : ''}}" aria-current="page" href="{{ url('VisionMission') }}">@lang('frontend.mission_vision')</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="{{request()->Is('LotteryResult') ? 'active' : ''}}" aria-current="page" href="{{url('/LotteryResult')}}">@lang('frontend.result')</a>
                </li>
                <li>
                  <a href="#!">Our Services</a>
                  <ul class="nav-dropdown">
                    <li>
                      <a class="{{request()->Is('TermsCondition') ? 'active' : ''}}" aria-current="page" href="{{url('/TermsCondition')}}">@lang('frontend.terms_condition')</a>
                    </li>
                    <!--<li>-->
                    <!--  <a class="{{request()->Is('BuySell') ? 'active' : ''}}" aria-current="page" href="{{url('/BuySell')}}">@lang('frontend.buy_sell')</a>-->
                    <!--</li>-->
                    <li>
                      <a class="{{request()->Is('AwardsPrize') ? 'active' : ''}}" aria-current="page" href="{{url('/AwardsPrize')}}">@lang('frontend.award_prize')</a>
                    </li>
                    <!-- <li>
                      <a class="{{request()->Is('fees') ? 'active' : ''}}" aria-current="page" href="{{url('/fees')}}">@lang('frontend.fees')</a>
                    </li> -->
                  </ul>
                </li>
                <!--<li>-->
                <!--  <a class="{{request()->Is('Payout') ? 'active' : ''}}" aria-current="page" href="{{url('/Payout')}}">@lang('frontend.payout')</a>-->
                <!--</li>-->
                <li>
                  <a class="{{request()->Is('AgentList') ? 'active' : ''}}" aria-current="page" href="{{url('/AgentList')}}">@lang('frontend.agent_list')</a>
                </li>
                <li>
                  <a class="{{request()->Is('ContactUs') ? 'active' : ''}}" aria-current="page" href="{{url('/ContactUs')}}">@lang('frontend.contact_us')</a>
                </li>
              </ul>
            </nav>
            </div>
        </div>
      </section>
    </div>
  </div>
    <!-- nav area end -->

