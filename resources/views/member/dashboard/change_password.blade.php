@extends('member.dashboard.master')
@section('member_dash_title')
Change Password
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
</style>
<div class="content-wrapper" style="color: black">
    @component('components.user_dashboard_breadcrumb')

    @slot('title2')
       Profile
    @endslot
    @slot('title3')
       Change Password
    @endslot


   @endcomponent
    <div class="card">
        <div class="card-header">
            Change Password
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('member.submit_change_pass') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Existing Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control" name="existing_password" id="existing_password" required onkeyup="checkPassword()">
                        <div class="message">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>New Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Confirm Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                        </td>
                    </tr>

                    <tr id="submit-row" class="d-none">
                        <td colspan="2" style="text-align: center">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </td>
                    </tr>
                </table>
                    </div>
                </div>
                <div class="col-12 text-center mt-2">
                    <button id="submit" type="submit" class="btn btn-sm btn-success" disabled>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function checkPassword()
    {
        let existing_password = $('#existing_password').val();

        if(existing_password != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.check_password') }}',

                type : 'GET',

                data : {existing_password},

                success : (res) => {
                    if(res == 1)
                    {
                        $('.message').html('');
                        $('#submit').prop('disabled',false);
                    }
                    else
                    {
                        $('#submit').prop('disabled',true);
                        $('.message').html(res);
                    }
                },
            })
        }
        else
        {
            $('.message').html('');
        }
    }
</script>

@endsection
