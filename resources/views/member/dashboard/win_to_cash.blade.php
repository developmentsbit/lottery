@extends('member.dashboard.master')
@section('member_dash_title')
Win To Cash
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
       Balance Convert
    @endslot
    @slot('title3')
       Win To Cash
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Win To Cash
        </div>
        <div class="card-body">
            <div class="alert alert-warning">
                <span>Win To Cash Conversion Fees 1.00%</span>

            </div>
            <form method="post" action="{{ route('member.balance_convert') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="post_type" value="win_to_cash">
                <table class="table">

                    <tr>
                        <th>Amount</th>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required>
                                <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script>
    function getMethodInfo()
    {
        let method = $('#method').val();

        if(method != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_method_info') }}',

                type : 'GET',

                data : {method},

                success : (res) => {
                    $('.message').html(res);
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
