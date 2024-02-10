@extends('member.dashboard.master')
@section('member_dash_title')
@lang('frontend.home')
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
</style>
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
        <div class="card-body bg-success text-white">
            <ul>
                <li>Affiliate Commission 2%.</li>
                <li>Six Digit-(D-$1 X 3000 & R-$1 X $500 Win) Discount offer 35% .</li>
                <li>3 Up (D-$1 X 500 & R-$1.00 X $100 Win) Discount offer 30%.</li>
                <li>2 Up (D-$1 X 80 & R-$1 X $40 Win) Discount offer 15%.</li>
                <li>2 Down (D-$1 X 80 & R-$1 X $40 Win) Discount offer 15%.</li>
                <li>1 Of 3 Up Single Digit-($1 X $3 Win).</li>
                <li>1 Of 2 Up Single Digit-($1 X $3 Win).</li>
                <li>1 Of 2 Down Single Digit-($1 X $4 Win).</li>
                <li>3 Up Game Total-($1 X $7 Win).</li>
                <li>2 Up Game Total-($1 X $7 Win).</li>
                <li>2 Down Game Total-($1 X $7 Win).</li>
            </ul>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    <i class="fa fa-user"></i> @lang('frontend.profile')
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>Account No : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Name : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Email : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Joined : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Status : </th>
                            <th></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    Sponsor Details
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>Account No : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Name : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Contact No : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Email : </th>
                            <th></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    Referral & Affiliate No.
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>Referrals : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Affiliation Link : </th>
                            <th>
                                <div class="input-group">
                                    <input type="readonly" value="{{ url('member/registration') }}/?refer={{ base64_encode(Auth::guard('member')->user()->member_id) }}" class="form-control" id="link">
                                    <span onclick="coppyClipBoard()" class="input-group-append btn btn-secondary">
                                        <i class="fa fa-copy"></i>
                                    </span>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    National Thai Lottery Result
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>1st Prize : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>3UP : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>2UP : </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>2DOWN : </th>
                            <th></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

  </div>

  <script>
    function coppyClipBoard() {
        // alert();
    // Get the text field
    var copyText = document.getElementById("link");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
    alert("Copied the text: " + copyText.value);
    }
  </script>

  @endsection
