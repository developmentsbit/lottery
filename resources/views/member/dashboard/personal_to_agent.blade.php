@extends('member.dashboard.master')
@section('member_dash_title')
Personal To Agent
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
       Cash Out
    @endslot
    @slot('title3')
       Personal To Agent
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Personal To Agent
        </div>
        <div class="card-body">
            <div class="alert alert-warning">
                <span>Personal To Agent  Transfer Fees 8.00%</span>
            </div>
            <form method="post" action="#" enctype="multipart/form-data">
                @csrf
                <table class="table">
                    <tr>
                        <th>Select Agent</th>
                        <td>
                            <select class="form-control form-control-sm" name="method" id="method" onchange="" required>
                                <option value="">Select Agent</option>
                                @if(isset($params['agent']))
                                @foreach ($params['agent'] as $v)
                                @if($v->roles()->pluck('name')->first() == 'Agent')
                                <option value="{{ $v->id }}">{{ $v->name }}</option>
                                @endif
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
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onchange="">
                                <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                            </div>
                            <div class="cashout_message p-2">

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Your Payment Account</th>
                        <td>
                        <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Your Payment Account Number" required>
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

                    url : '{{ route('member.get_method_vat') }}',

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
    <script>
        function getOriginalAmount()
        {
            let method = $('#method').val();
            let amount = $('#amount').val();

            if(method != '' && amount != '')
            {
                $.ajax({
                    headers : {
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                    },

                    url : '{{ route('member.get_cash_out_amount') }}',

                    type : 'GET',

                    data : {method,amount},

                    success : (res) => {
                        $('.cashout_message').html(res);
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
