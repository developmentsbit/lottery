<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category" style="background: white;color:black;padding:10px;">
            <b>Cash : $ {{App\Traits\Member::getBalance(Auth::guard('member')->user()->member_id)}}</b><br>
            <hr>
            <b>Win Balance : $ 10</b>
        </li>
      <li class="nav-item nav-category">@lang('frontend.menus')</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('member.dashboard') }}">
          <span class="icon-bg"><i class="fa fa-home"></i></span>
          <span class="menu-title">@lang('frontend.home')</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="fa fa-user"></i></span>
          <span class="menu-title">@lang('frontend.profile')</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">@lang('frontend.personal_profile')</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">@lang('frontend.change_password')</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-cash-in" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-money"></i></span>
          <span class="menu-title">@lang('frontend.cash_in')</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-cash-in">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('member.cash_in')}}">@lang('frontend.cash_in')</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('member.cash_in_history')}}">Cash In History</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-lottery" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-trophy"></i></span>
          <span class="menu-title">@lang('frontend.lottery')</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-lottery">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('member.lottery')}}">@lang('frontend.thai_lottery')</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('member.lottery_history')}}">Thai Lottery History</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->
