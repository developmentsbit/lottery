<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Registration</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('MemberAsset') }}/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-8 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ asset('Backend/settings/') }}/{{ $settings->logo }}">
                </div>
                <h6 class="font-weight-light">Sign In To Create Your Account    </h6>
                <form method="post" action="{{ route('member.store') }}">
                    @csrf
                    <div class="row mt-2">
                        @if(isset($params['referral_no']))
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.referral_no')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('referral_no') is-invalid @enderror" name="referral_no" id="referral_no" value="{{ $params['referral_no'] }}" readonly>
                            @error('referral_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @endif
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.mobile_no')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('mobile_no') is-invalid @enderror" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}"  autocomplete="off">
                            @error('mobile_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.password')</label><span class="text-danger">*</span>
                            <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" onkeyup="checkPass()" autocomplete="off">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.confirm_password')</label><span class="text-danger">*</span>
                            <input type="password" class="form-control form-control-sm @error('confirm_password') is-invalid @enderror" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}" onkeyup="checkPass()" autocomplete="off">
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
                            <input type="text" class="form-control form-control-sm @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}" autocomplete="off">
                            @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.last_name')</label><span class="text-danger">*</span>
                            <input type="text" class="form-control form-control-sm @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}" autocomplete="off">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.gender')</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('gender') is-invalid @enderror" name="gender" id="gender" autocomplete="off">
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
                            <input type="text" class="form-control form-control-sm @error('city') is-invalid @enderror" name="city" id="city" value="{{ old('city') }}" autocomplete="off">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.country')</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('country') is-invalid @enderror" name="country" id="country" autocomplete="off">
                                @if(isset($params['country']))
                                @foreach ($params['country'] as $v)

                                <option value="{{$v->name}}">{{$v->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.email')</label>
                            <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" autocomplete="off">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">
                            <label>@lang('frontend.nationality')</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('nationality') is-invalid @enderror" name="nationality" id="nationality" autocomplete="off">
                                @if(isset($params['country']))
                                @foreach ($params['country'] as $v)

                                <option value="{{$v->name}}">{{$v->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('nationality')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 form-group mt-2">

                        </div>
                        <hr>
                        <div class="card-sec-title mt-2 col-12">
                            <b class="text-success">@lang('frontend.terms_condition')</b>
                        </div>
                        <br>
                        <div class="form-group col-12">
                            <input type="checkbox" name="terms_condition" id="terms_condition" onclick="checkPass()">
                            <label for="terms_condition">@lang('frontend.terms_conditions_accept')</label>
                        </div>
                        <div class="form-group col-12">
                            <input type="checkbox" name="personalized_offer" id="personalized_offer">
                            <label for="personalized_offer">@lang('frontend.personalized_offer')</label>
                        </div>
                        <hr>
                        <div class="col-12 mt-4 text-center">
                            <button id="submit" type="submit" class="btn btn-info btn-sm btn-block"> <i class="fa fa-save"></i> @lang('common.submit')</button>
                            <br>
                            <span>@lang('frontend.already_have_account') ? </span> <a href="{{ route('member.login') }}">@lang('frontend.login')</a>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('sweetalert::alert')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('MemberAsset') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('MemberAsset') }}/js/off-canvas.js"></script>
    <script src="{{ asset('MemberAsset') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('MemberAsset') }}/js/misc.js"></script>
    <!-- endinject -->
    <script>
        function checkPass()
        {
            if($('#terms_condition').is(':checked'))
            {
                $('#submit').attr('disabled',false);
            }
            else
            {
                $('#submit').attr('disabled',true);
            }


            let pass = $('#password').val();
            let confirm_pass = $('#confirm_password').val();

            if(pass != '' || confirm_pass != '')
            {
                if(pass != confirm_pass)
                {
                    $('#submit').attr('disabled',true);
                }
                else
                {
                    $('#submit').attr('disabled',false);

                }
            }
            else
            {
                $('#submit').attr('disabled',true);
            }




        }
    </script>
  </body>
</html>
