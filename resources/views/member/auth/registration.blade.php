@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.register')
@endsection
<!--page title -->
@section('body')

<div class="registration_area">
    <div class="container">
        <div class="card mt-2" style="max-width: 650px;margin:auto">
            <div class="card-header">
                <h4>@lang('frontend.registration')</h4>
            </div>
            <div class="card-body" style="text-align: left;">
                <div class="card-sec-title">
                    <b class="text-success">@lang('frontend.account_details')</b>
                </div>
                <form method="post" action="{{ route('member.store') }}">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.referral_no')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('referral_no') is-invalid @enderror" name="referral_no" id="referral_no" value="{{ old('referral_no') }}">
                            @error('referral_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.mobile_no')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}">
                            @error('mobile_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.password')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.confirm_password')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}">
                            @error('confirm_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="card-sec-title">
                        <b class="text-success">@lang('frontend.personal_details')</b>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.first_name')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.last_name')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.gender')</label><span class="text-danger">*</span>
                            <select class="form-select form-select-sm @error('gender') is-invalid @enderror" name="gender" id="gender">
                                <option value="">@lang('common.select_one')</option>
                                <option @if(old('gender') == 'Male') selected @endif value="Male">@lang('frontend.male')</option>
                                <option @if(old('gender') == 'Female') selected @endif value="Female">@lang('frontend.female')</option>
                                <option @if(old('gender') == 'Others') selected @endif value="Others">@lang('frontend.others')</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.city')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('city') is-invalid @enderror" name="city" id="city" value="{{ old('city') }}">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.country')</label><span class="text-danger">*</span>
                            <select class="form-select form-select-sm @error('country') is-invalid @enderror" name="country" id="country">
                                <option value="Bangladesh">@lang('frontend.bangladesh')</option>
                            </select>
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.email')</label><span class="text-danger">*</span>
                            <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.nationality')</label><span class="text-danger">*</span>
                            <select class="form-select form-select-sm @error('nationality') is-invalid @enderror" name="nationality" id="nationality">
                                <option value="Bangladesh">@lang('frontend.bangladesh')</option>
                            </select>
                            @error('nationality')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr>
                        <div class="card-sec-title mt-2">
                            <b class="text-success">@lang('frontend.terms_condition')</b>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms_condition" id="terms_condition">
                            <label for="terms_condition">@lang('frontend.terms_conditions_accept')</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms_condition" id="personalized_offer">
                            <label for="terms_condition">@lang('frontend.personalized_offer')</label>
                        </div>
                        <hr>
                        <div class="col-12 mt-4 text-center">
                            <button type="submit" class="btn btn-info btn-sm btn-block"> <i class="fa fa-save"></i> @lang('common.submit')</button>
                            <br>
                            <span>@lang('frontend.already_have_account') ? </span> <a href="">@lang('frontend.login')</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

