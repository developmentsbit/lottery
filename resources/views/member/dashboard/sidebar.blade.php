<style>
    nav#sidebar {
    background: white;
    color: black !important;
}
.sidebar .nav .nav-item .nav-link i.menu-arrow{
    color: black;
}
.nav-link{
    color: black !important ;
}
.sidebar .nav .nav-item:hover{
    background: lightgray !important;
}
.sidebar .nav .nav-item.active > .nav-link .menu-title{
    color : red !important;
}
.sidebar .nav .nav-item.active > .nav-link i{
    color:  red !important;
}
.sidebar .nav .nav-item.active > .nav-link:before
{
    background : red !important;
}
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <img src="{{ asset('user_dash_side_image.jpg') }}" alt="" class="img-fluid" style="height: 160px;">
        <li class="nav-item nav-category" style="background: rgb(189, 225, 247);color:black;padding:10px;margin-top : 0px;">
            <div class="text-center">
                <h4>Cash</h4>
                $ {{App\Traits\Member::getBalance(Auth::guard('member')->user()->member_id)}}
            </div>
            <hr>
            <div class="text-center">
                <h4>Win Balance</h4>
                $ {{App\Traits\Member::getWinBalance(Auth::guard('member')->user()->member_id)}}
            </div>
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
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-buy-sell" aria-expanded="false" aria-controls="ui-lottery">
          <span class="icon-bg"><i class="fa fa-certificate"></i></span>
          <span class="menu-title">Buy & Sell</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-buy-sell">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.create_post') }}">Create Post</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.post_view') }}">Your Post</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('member.public_post') }}">Public Post</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->
