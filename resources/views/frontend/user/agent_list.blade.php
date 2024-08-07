@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.agent_list')
@endsection
<!--page title -->
@section('body')

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
td i{
    font-size: 25px;
    color: #fff;
}
</style>

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.agent_list')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.agent_list')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section agent_list -->
<section class="section p-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2" style="text-align: right">
                <a href="#"><button class="btn  btn-danger"> @lang('frontend.agentsignup')</button></a>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <table>
                    <tr>
                        <th>#</th>
                        <th>AGENT TYPE</th>
                        <th>NAME</th>
                        <th>COUNTRY</th>
                        <th>CONTACT US</th>
                        <th>REMARK</th>
                        <th>ACTION</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Super Agent</td>
                        <td>Lotto Mastermind 3up</td>
                        <td>Bangladesh</td>
                        <td><a href="https://www.facebook.com/drjoshim777?mibextid=ZbWKwL" style="color: #fff;"><i class="fa-brands fa-facebook"></i></a></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Super Agent</td>
                        <td>Jirawat Sutivani chsak</td>
                        <td>Thailand</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Super Agent</td>
                        <td>Sultan</td>
                        <td>Pakistan</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Super Agent</td>
                        <td>Anower Hossain</td>
                        <td>Saudi Arab</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Super Agent</td>
                        <td>Muman</td>
                        <td>Kuwait</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Super Agent</td>
                        <td>Abu Tahir</td>
                        <td>India</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Super Agent</td>
                        <td>Umar Sheikh</td>
                        <td>Saudi Arab</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Super Agent</td>
                        <td>Anowar Hossen</td>
                        <td>Kuwit</td>
                        <td><i class="fa-brands fa-facebook"></i></td>
                        <td>
                            <span class="btn btn-success btn-sm">Verified</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <div  class="col-lg-12 col-md-12 col-12">
            <h3 style="color: #fff;">If You are Intersted Thai lottery Online Please Sign Up 
                <a href="{{ route('member.registration') }}" class="btn btn-sm btn-secondary">
                    <i class="fa fa-users"></i> @lang('frontend.register')
                </a>
            </h3>
        </div>
    </div>
</section>
<section class="p-4" style="background: #8458B3">
    <div class="container" style="background: #51297b;padding: 34px;border-radius: 1% 1% 1% 1%;">
        <p>Thaiglo Agent List gives you the opportunity to find agents in your local area of Any Country.For example, you can contact the Any district Thaoglo Agent from the List.</p>
</section>
<!-- thai lottery section about -->

@endsection

