@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.deposit')
@endsection
<!--page title -->
@section('body')

<style>

/* Add padding to containers */

/* Full-width input fields */
input[type=text], input[type=number], input[type=file], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.deposit')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.deposit')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section deposit -->
<section class="section p-4">
    <h3 style="text-align:center;background: #ef0000;color: #fff;">Confirmation Statement</h3>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="/action_page.php">
                    <div class="row">
                        <hr>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last_name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Mobile <span class="text-danger">*</span></label>
                            <input type="text" name="mobile" id="mobile" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>From Account <span class="text-danger">*</span></label>
                            <input type="text" name="from_account" id="from_account" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Transfer To <span class="text-danger">*</span></label>
                            <input type="text" name="transfor_to" id="transfor_to" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Transfer Amount <span class="text-danger">*</span></label>
                            <input type="number" name="transfer_amount" id="transfer_amount" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-2">
                            <label>Payment Statement <span class="text-danger">*</span></label>
                            <input type="file" name="file" id="file" required>
                        </div>

                        <h3>Terms and Mailing</h3>
                        <p> <input type="checkbox" name="" value=""><span class="text-danger">*</span> I accept the <a href="#">Terms and Conditions</a></p>
                        <p> <input type="checkbox" name="" value=""><span class="text-danger">*</span> I want to receive personalized offers by your site</p>

                        <div class="col-12 mt-4" style="text-align: left">
                            <button type="submit" id="submit" class="btn  btn-success"> @lang('frontend.submit')</button>
                        </div>
                    </div>  
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section deposit -->

@endsection

