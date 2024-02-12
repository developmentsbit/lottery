@extends('member.dashboard.master')
@section('member_dash_title')
Cash In
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
</style>
<div class="content-wrapper" style="color: black">
    <div class="card">
        <div class="card-header">
            Cash In
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('member.store_cash_in') }}" enctype="multipart/form-data">
                @csrf
                <table class="table">
                    <tr>
                        <th>Select Method</th>
                        <td>
                            <select class="form-control form-control-sm" name="method" id="method" onchange="return getMethodInfo()" required>
                                <option value="">Select Method</option>
                                @if(isset($params['method']))
                                @foreach ($params['method'] as $m)
                                <option value="{{ $m->id }}">{{ $m->method_name }}</option>
                                @endforeach
                                @endif
                            </select>
                            <div class="message mt-2">

                            </div>
                        </td>
                    </tr>
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
                        <th>Payment Account</th>
                        <td>
                        <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Payment Account Number" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Transaction ID</th>
                        <td>
                        <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Transaction ID" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Document</th>
                        <td>
                        <input type="file" class="form-control" name="document" id="document">
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
