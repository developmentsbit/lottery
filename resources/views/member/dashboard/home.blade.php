@extends('member.dashboard.master')
@section('member_dash_title')
@lang('frontend.home')
@endsection
@section('body')
<div class="content-wrapper" style="color: black">
    <div class="row mb-2" id="proBanner">
      <div class="col-12 bg-white p-2">
        <marquee behavior="" direction="">
            থাইল্যান্ড লটারি সিস্টেম
        </marquee>
      </div>
    </div>

    <div class="commision_list mt-2 card">
        <div class="card-header">
            <b>@lang('frontend.thai_national_lottery')</b>
        </div>
        <div class="card-body">
            <ul>
                <li>Affiliate Commission 2%.</li>
                <li>Six Digit-(D-$1 X 3000 & R-$1 X $500 Win) Discount offer 35% .</li>
            </ul>
        </div>
    </div>

  </div>

  @endsection
