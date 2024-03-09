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
            <form method="post" action="{{route('member.cashout_agent_store')}}" enctype="multipart/form-data">

                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Select Agent</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="agent_id" id="agent_id" onchange="" required autocomplete="off">
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
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Amount</label><span class="text-danger">*</span>
                        <div class="input-group">
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onchange="" autocomplete="off">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                        <div class="cashout_message p-2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Your Payment Account Number</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Your Payment Account Number" required autocomplete="off">
                    </div>
                </div>


                <div class="col-12 text-center mt-2">

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
