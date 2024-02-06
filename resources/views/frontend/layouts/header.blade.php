<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('page_title') - Lottery</title>
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
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="logo__header">
                            <img src="{{ asset('Backend/settings/') }}/{{ $settings->logo }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="login_register_area">
                            <ul class="header_side_nav">
                                <li class="nav-item dropdown">
                                    <form method="post" action="{{url('changeLocale')}}" id="changeLocale">
                                        @csrf
                                        <input type="hidden" id="locale" name="locale" value="">
                                        @if(config('app.locale') == 'en')
                                    <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                                        <img src="{{asset('Backend')}}/img/flags/us.png" alt="English" id="flag_up">
                                    @elseif(config('app.locale') == 'bn')
                                    <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                                        <img src="{{asset('Backend')}}/img/flags/bd_big.png" alt="English" id="flag_up">
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                        <a class="dropdown-item" id="submitLoacaleEn" onclick="submitLoacle();">
                                            <img src="{{asset('Backend')}}/img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
                                            <span class="align-middle">English</span>
                                        </a>
                                        <a class="dropdown-item" id="submitLoacaleBn" onclick="submitLoacle();">
                                            <img src="{{asset('Backend')}}/img/flags/bd_big.png" alt="English" width="20" class="align-middle me-1" />
                                            <span class="align-middle">বাংলা</span>
                                        </a>

                                    </div>
                                </form>
                            </li>
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
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header end here -->

    <!-- nav area start -->
    <section class="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">@lang('frontend.home')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('AboutUs') ? 'active' : ''}}" aria-current="page" href="{{ url('AboutUs') }}">@lang('frontend.about_us')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('BuySell') ? 'active' : ''}}" aria-current="page" href="{{url('/BuySell')}}">@lang('frontend.buy_sell')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('LotteryResult') ? 'active' : ''}}" aria-current="page" href="{{url('/LotteryResult')}}">@lang('frontend.result')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('AwardsPrize') ? 'active' : ''}}" aria-current="page" href="{{url('/AwardsPrize')}}">@lang('frontend.award_prize')</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link {{request()->Is('Deposit') ? 'active' : ''}}" aria-current="page" href="{{url('/Deposit')}}">@lang('frontend.deposit')</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('Payout') ? 'active' : ''}}" aria-current="page" href="{{url('/Payout')}}">@lang('frontend.payout')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{request()->Is('AgentList') ? 'active' : ''}}" aria-current="page" href="{{url('/AgentList')}}">@lang('frontend.agent_list')</a>
                      </li>
                    </ul>
                  </div>
            </nav>
        </div>
    </section>
    </div>
    </div>
    <!-- nav area end -->


