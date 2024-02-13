<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category" style="background: white;color:black;padding:10px;">
            <b>Cash : $ {{App\Traits\Member::getBalance(Auth::guard('member')->user()->member_id)}}</b><br>
            <hr>
            <b>Win Balance : $ {{App\Traits\Member::getWinBalance(Auth::guard('member')->user()->member_id)}}</b>
        </li>
      {{-- <li class="nav-item nav-category">@lang('frontend.menus')</li> --}}
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
            <li class="nav-item"> <a class="nav-link" href="{{route('member.personal_profile')}}">@lang('frontend.personal_profile')</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">@lang('frontend.change_password')</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">@lang('frontend.personal_profile')</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.change_password') }}">@lang('frontend.change_password')</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-cash-in" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-upload"></i></span>
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
            <li class="nav-item"> <a class="nav-link" href="{{route('member.lottery')}}">Thai National Lottery</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('member.lottery_history')}}">Thai Lottery History</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-cash-out" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-rocket"></i></span>
          <span class="menu-title">Cash Out</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-cash-out">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('member.cash_out')}}">Cash Out</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('member.cash_out_history')}}">Cash Out History</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-referral" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-stack-exchange fa-fw"></i></span>
          <span class="menu-title">Referral</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-referral">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.referral_history') }}">Referral History</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-balance-convert" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-exchange"></i></span>
          <span class="menu-title">Balance Convert</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-balance-convert">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.cash_to_win') }}">Cash To Win</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.win_to_cash') }}">Win To Cash</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-balance-transfer" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-sign-out"></i></span>
          <span class="menu-title">Balance Transfer</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-balance-transfer">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.cash_transfer') }}">Cash Balance Transfer</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.win_transfer') }}">Win Balance Transfer</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-transaction-history" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-bars"></i></span>
          <span class="menu-title">Transaction History</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-transaction-history">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.cash_balance_history') }}">Cash Balance</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.win_balance_history') }}">Win Balance</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->
