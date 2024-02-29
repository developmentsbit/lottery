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
                <table class="table">
                    <tr>
                        <th>Existing Password</th>
                        <td>
                        <input type="password" class="form-control" name="existing_password" id="existing_password" required onkeyup="checkPassword()">
                        <div class="message">

                        </div>
                        </td>
                    </tr>
                    <tr>
                        <th>New Password</th>
                        <td>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Confirm Password</th>
                        <td>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                        </td>
                    </tr>

                    <tr id="submit-row" class="d-none">
                        <td colspan="2" style="text-align: center">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </td>
                    </tr>
                </table>
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
                        $('#submit-row').removeClass('d-none');
                    }
                    else
                    {
                        $('#submit-row').addClass('d-none');
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
