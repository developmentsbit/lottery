@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.result')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.result')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.result')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section result -->
<div class="container">
  <div class="row">
    <div class="tab-wrap">

      <!-- active tab on page load gets checked attribute -->
      <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
      <label for="tab1">National Lottery Result</label>
      
      <input type="radio" id="tab2" name="tabGroup1" class="tab">
      <label for="tab2">Global Lottery Result</label>
      
      <input type="radio" id="tab3" name="tabGroup1" class="tab">
      <label for="tab3">BINGO LOTTO 3D Result</label>
      
      <div class="tab__content">
        <h3>National Lottery Result</h3>
        <h2>2024-01-17</h2>
        <h4>First Prize Result</h4>
      </div>
      
      <div class="tab__content">
        <h3>Global Lottery Result</h3>
        <h2>2024-01-17</h2>
        <h4>Five Ball</h4>
      </div>
      
      <div class="tab__content">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <h6>MORNING 3D Result</h6>
            <h2>2024-01-17</h2>
          </div>
          
          <div class="col-lg-6 col-md-6 col-12">
            <h6>EVENING 3D Result</h6>
            <h2>2024-01-17</h2>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- thai lottery section result -->



@endsection

