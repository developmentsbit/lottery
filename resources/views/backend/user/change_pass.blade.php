@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('user.submit_change_pass') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 mt-2">
                                    <label for="password">Password</label><span class="text-danger">*</span>
                                    <input type="password" id="password" name="password" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 mt-2">
                                    <label for="confirm_password">Confirm Password</label><span class="text-danger">*</span>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 mt-2">
                                    <input type="submit" name="submit" class="btn btn-sm btn-success" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>


@endsection
