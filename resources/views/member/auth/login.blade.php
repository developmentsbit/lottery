<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
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
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{ asset('Backend/settings/') }}/{{ $settings->logo }}">
                </div>
                <h6 class="font-weight-light">Sign in to continue.</h6>
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
  </body>
</html>
