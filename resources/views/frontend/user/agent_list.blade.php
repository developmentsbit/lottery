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
                        <th>CONTACT US</th>
                        <th>COUNTRY</th>
                        <th>REMARK</th>
                        <th>ACTION</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Super Agent</td>
                        <td>Uchit Wai</td>
                        <td>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-messenger"></i></a>
                        </td>
                        <td>Burma</td>
                        <td>
                            <span class="btn btn-success btn-sm">@lang('common.active')</span>
                        </td>
                        <td>
                            <a  class="btn btn-info border-0 edit text-light" data-toggle="modal" data-target="#exampleModalCenters" href="#">@lang('frontend.complain')</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section about -->

@endsection

