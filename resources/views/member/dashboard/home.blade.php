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

@php
use App\Models\banner;
$banner = banner::first();
@endphp

<div class="content-wrapper" style="color: black">
    <div class="row mb-2" id="proBanner">
      <div class="col-12 bg-white p-2">
        <label for="" style="font-size: 30px; color:red; font-weight: bold;">Notice :</label>
        <label for="" style="background: #21c759;padding: 8px;">
            <marquee behavior="" direction="">
            <h2 style="color:white;"> {{$banner->running_notice}}</h2>
            </marquee>
        </label>
      </div>
    </div>

    <div class="row mb-2" id="proBanner">
      <div class="col-12 bg-white p-2">
        <img src="{{ asset('Backend/settings/') }}/{{ $banner->image }}" alt="" class="img-fluid">
      </div>
    </div>

    <div class="commision_list mt-2 card">
        <div class="card-header">
            <b>@lang('frontend.thai_national_lottery')</b>
        </div>
        <div class="col-12 table-responsive">
           <table class="w-100">
                    <tr>
                        <th>Game & Bhat Amount</th>
                        <th>Win Amount</th>
                        <th>Discount</th>
                    </tr

                    <tr>
                        <td>Six Digit Direct Bhat Amount ($x1)</td>
                        <td>$-2500</td>
                        <td rowspan="2">40%</td>
                    </tr>

                     <tr>
                        <td>Six Digit Rumbal Bhat Amount ($x1)</td>
                        <td>$-400</td>

                    </tr>


                    <tr>
                        <td>3up Direct Bhat Amount ($x1)</td>
                        <td>$-350</td>
                        <td rowspan="2">25%</td>
                    </tr>

                     <tr>
                        <td>3up Rumbal Bhat Amount ($x1)</td>
                        <td>$-60</td>

                    </tr>


                     <tr>
                        <td>2up Direct Bhat Amount ($x1)</td>
                        <td>$-80</td>
                        <td rowspan="2">15%</td>
                    </tr>

                     <tr>
                        <td>2up Rumbal Bhat Amount ($x1)</td>
                        <td>$-40</td>

                    </tr>

                        <tr>
                        <td>2 Down Direct Bhat Amount ($x1)</td>
                        <td>$-60</td>
                        <td rowspan="2">15%</td>
                    </tr>

                     <tr>
                        <td>2 Down Rumbal Bhat Amount ($x1)</td>
                        <td>$-40</td>
                    </tr>
                    <tr>
                        <td>1 of Single Digit Bhat Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>

                     <tr>
                        <td>1 of 2up Single Digit Bhat Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1 of 2down Single Digit Bhat Amount ($x1)</td>
                        <td>$-3</td>
                        <td></td>
                    </tr>
                        <tr>
                        <td>3up Game Total Bhat Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>       <tr>
                        <td>2up Game Total Bhat Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>

                       <tr>
                        <td>2down Game Total Bhat Amount ($x1)</td>
                        <td>$-5</td>
                        <td></td>
                    </tr>


                </table>
        </div>
    </div>

    <div class="row mt-2">
        @php
        use App\Traits\Member;
        use App\Models\Member as MemberModel;
        $data = MemberModel::where('member_id',Auth::guard('member')->user()->member_id)->first();
        @endphp
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    <i class="fa fa-user"></i> @lang('frontend.profile')
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>Account No : </th>
                            <th>{{$data->member_id}}</th>
                        </tr>
                        <tr>
                            <th>Name : </th>
                            <th>{{ $data->first_name.' '.$data->last_name }}</th>
                        </tr>
                        <tr>
                            <th>Email : </th>
                            <th>{{$data->email}}</th>
                        </tr>
                        <tr>
                            <th>Joined : </th>
                            <th>{{$data->created_at}}</th>
                        </tr>
                        <tr>
                            <th>Status : </th>
                            <th>Active</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @if(isset($params['referrar']))
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-success">
                    Sponsor Details
                </div>
                <div class="card-body p-2">
                    <table class="table">
                        <tr>
                            <th>Account No : </th>
                            <th>{{ $params['referrar']->member_id }}</th>
                        </tr>
                        <tr>
                            <th>Name : </th>
                            <th>{{ $params['referrar']->first_name.' '.$params['referrar']->last_name }}</th>
                        </tr>
                        <tr>
                            <th>Contact No : </th>
                            <th>{{ $params['referrar']->mobile_no }}</th>
                        </tr>
                        <tr>
                            <th>Email : </th>
                            <th>{{ $params['referrar']->email }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @endif
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
                    @if(isset($params['result']))
                        <tr>
                            <th>1st Prize : </th>
                            <th>{{ $params['result']->first_prize }}</th>
                        </tr>
                        <tr>
                            <th>3UP : </th>
                            <th>{{ $params['result']->three_up }}</th>
                        </tr>
                        <tr>
                            <th>2UP : </th>
                            <th>{{ $params['result']->two_up }}</th>
                        </tr>
                        <tr>
                            <th>2DOWN : </th>
                            <th>{{ $params['result']->two_down }}</th>
                        </tr>
                        @endif
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
