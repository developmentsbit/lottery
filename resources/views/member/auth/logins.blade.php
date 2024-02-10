@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.login')
@endsection
<!--page title -->
@section('body')

<div class="registration_area">
    <div class="container">
        <div class="card mt-2" style="max-width: 650px;margin:auto">
            <div class="card-header">
                <h4>@lang('frontend.login_title')</h4>
            </div>
            <div class="card-body" style="text-align: left;">
                <form method="post" action="{{ route('member.login_attempt') }}">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-lg-12 col-md-12 col-12 form-group mt-2">
                            <label>@lang('frontend.mobile_no')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}">
                            @error('mobile_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-12 form-group mt-2">
                            <label>@lang('frontend.password')</label><span class="text-danger">*</span>
                            <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="col-12 mt-4 text-center">
                            <button id="submit" type="submit" class="btn btn-info btn-sm btn-block"> <i class="fa fa-save"></i> @lang('frontend.login')</button>
                            <br>
                            <span>@lang('frontend.didnt_have_account') ? </span> <a href="{{ route('member.registration') }}">@lang('frontend.registration')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

