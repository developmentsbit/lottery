@extends('member.dashboard.master')
@section('member_dash_title')
Cash Out
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
       Cash Out
    @endslot
   @endcomponent
   <div class="card">
    <div class="card-body" style="background: #e7dec6;color:red;border: 16px solid #a0ad8b;padding: 16px;">
        <p><h3><i class="fa fa-window-restore" aria-hidden="true"></i> Minimum Per Withdrawal Amount is $100.00 Maximum Per Withdrawal Amount is $1000.00</h3></p>
        <p><h3><i class="fa fa-window-restore" aria-hidden="true"></i> Withdrawal Payment 6 working days.(Only Mobile Banking Withdrawal time 2 working Day.)</h3></p>
    </div>
   </div>
    <div class="card">
        <div class="card-header">
            Cash Out
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('member.store_cash_out') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Select Cash Out Method</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="method" id="method" onchange="getMethodInfo();getOriginalAmount()" required>
                            <option value="">Select Cashout Method</option>
                            @if(isset($params['method']))
                            @foreach ($params['method'] as $m)
                            <option value="{{ $m->id }}">{{ $m->method_name }}</option>
                            @endforeach
                            @endif
                        </select>
                        <div class="message mt-2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Amount</label><span class="text-danger">*</span>
                        <div class="input-group">
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onchange="getOriginalAmount()" autocomplete="off">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                        <div class="cashout_message p-2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Your Payment Account</label>
                        <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Your Payment Account Number" required autocomplete="off">
                    </div>
                </div>

                <div class="col-12 mt-2 text-center">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>

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
