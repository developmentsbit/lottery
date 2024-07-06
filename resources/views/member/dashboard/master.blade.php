<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="viewport" content="width=1024"> --}}
    <title>@yield('member_dash_title') - @lang('frontend.member_dashboard')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('MemberAsset') }}/css/flip.min.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('Backend/settings/') }}/{{ $settings->favicon }}" />
    <link href="https://fonts.cdnfonts.com/css/ds-digital" rel="stylesheet">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color:#afc7e5;">

        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: #afc7e5;">
          {{-- <a class="navbar-brand brand-logo" href="{{ route('member.dashboard') }}"><img src="{{ asset('user_logo.jpg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="{{ route('member.dashboard') }}"><img src="{{ asset('user_logo.jpg') }}" alt="logo" /></a> --}}

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                @php
                    $profile = public_path().'/MemberProfile/'.Auth::guard('member')->user()->profile;
                @endphp
                <div class="nav-profile-img">
                    @if(file_exists($profile))
                  <img src="{{ asset('MemberProfile') }}/{{Auth::guard('member')->user()->profile}}" alt="image">
                  @else
                  <img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" alt="image">

                  @endif
                </div>
                <div style="padding:5px">
                  {{Auth::guard('member')->user()->first_name}} {{Auth::guard('member')->user()->last_name}}
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                    @if(file_exists($profile))
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('MemberProfile') }}/{{Auth::guard('member')->user()->profile}}" alt="">
                  @else
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" alt="">

                  @endif
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('member.personal_profile') }}">
                    <span>Profile</span>
                    <span class="p-0">
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('member.logout')}}">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas" style="color:#fff;">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('member.dashboard.sidebar')

        <div class="main-panel">
          @yield('body')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('sweetalert::alert')

    @stack('footer_script')

    <script src="{{ asset('MemberAsset') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('MemberAsset') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('MemberAsset') }}/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('MemberAsset') }}/js/off-canvas.js"></script>
    <script src="{{ asset('MemberAsset') }}/js/flip.min.js"></script>
    <script src="{{ asset('MemberAsset') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('MemberAsset') }}/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('MemberAsset') }}/js/dashboard.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- End custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65d076668d261e1b5f61ba81/1hmr4t0p6';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
  
  <footer>
    <div class="row">
      <div class="col-12" >
        <div class="row text-center">
          <div class="col-lg-3 col-md-3 col-12">
            {{--<br><br>
              <a href="https://www.facebook.com/drjoshim777?mibextid=ZbWKwL" style="text-decoration: none;color: #000;font-weight: bold;font-size: 19px;"><div style="color: #000">Click Here For facebook
                <i class="fa fa-facebook-official" aria-hidden="true"></i></a><br><br>
              </div>--}}
              <img  src="{{ asset('Frontend/image/test.gif') }}" alt="" class="img-fluid" style="max-height:150px;">
          </div>
          <div class="col-lg-3 col-md-3 col-12">
            <img  src="{{ asset('user_logo.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="text-center p-3" style="background-color: #fff"> Copyright © 2015  by <a class="text-black">Thai Government Lottery Office.</a> All Rights Reserved <br><br>
              <img class="img-fluid" src="{{ asset('Frontend/image/payment-method.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>
</html>
