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
    @component('components.user_dashboard_breadcrumb')

    @slot('title2')
       Cash In
    @endslot
    @slot('title3')
       Cash In
    @endslot
   @endcomponent

    <div class="card">
        <div class="card-header">
            Cash In
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('member.store_cash_in') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Select Method</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="method" id="method" onchange="getCountry()" required>
                            <option value="">Select Method</option>
                            @if(isset($params['method']))
                            @foreach ($params['method'] as $m)
                            <option value="{{ $m->id }}">{{ $m->method_name }}</option>
                            @endforeach
                            @endif
                            <option value="mobile_banking">Mobile Banking</option>
                        </select>
                        <div class="message mt-2">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2 d-none" id="country_box">
                        <label>Select Country</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="country" id="country" onchange="getAgentList();getOriginalAmount();">
                            <option value="">Select Country</option>

                        </select>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2 d-none" id="agent_box">
                        <label>Select Agent</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="agent" id="agent" onchange="getAgentAccounts()">
                            <option value="">Select Agent</option>

                        </select>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2 d-none" id="agent_account_box">
                        <label>Select Agent Account</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="agent_account" id="agent_account" >
                            <option value="">Select Account</option>

                        </select>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Amount</label><span class="text-danger">*</span>
                        <div class="input-group">
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onkeyup="return getOriginalAmount()">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                        <div class="show_original_amount p-2">

                        </div>

                        <input type="hidden" name="original_amount" id="original_amount">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Payment Account</label>
                        <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Payment Account Number" >
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>TRX ID</label>
                        <input type="text" class="form-control" name="transaction_id" id="transaction_id" placeholder="Transaction ID" >
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Document</label>
                        <input type="file" class="form-control" name="document" id="document">
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
    function getCountry()
    {
        let payment_method = $('#method').val();

        if(payment_method == 'mobile_banking')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_country')  }}',

                type : 'POST',

                success : function(res)
                {
                    $('.message').html('');
                    $('#country_box').removeClass('d-none');

                    $('#country').html(res);
                }
            })
        }
        else
        {

            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.getpay_method') }}',

                type : 'POST',

                data : {payment_method},

                success : function(res)
                {
                    $('.message').html(res);
                }
            });

            $('#country_box').addClass('d-none');
            $('#agent_box').addClass('d-none');
            $('#agent_accounts_box').addClass('d-none');
        }
    }

    function getAgentList()
    {
        let country_id = $('#country').val();

        if(country != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_agent_list') }}',

                type : 'POST',

                data : {country_id},

                success : function(res)
                {
                    $('#agent_box').removeClass('d-none');

                    $('#agent').html(res);
                }
            })
        }
        else
        {
            $('#agent_box').addClass('d-none');
        }
    }


    function getAgentAccounts()
    {
        let agent_id = $('#agent').val();

        if(country != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_agent_accounts') }}',

                type : 'POST',

                data : {agent_id},

                success : function(res)
                {
                    $('#agent_account_box').removeClass('d-none');

                    $('#agent_account').html(res);
                }
            })
        }
        else
        {
            $('#agent_account_box').addClass('d-none');
        }
    }


    function getOriginalAmount()
    {
        let payment_method = $('#method').val();

        let country_id = $('#country').val();


        if(payment_method == 'mobile_banking')
        {
            let amount = $('#amount').val();


            if(amount > 0)
            {

                $.ajax({
                    headers : {
                        'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                    },

                    url : '{{ route('member.get_original_amount') }}',

                    type : "POST",

                    data : {country_id},

                    success : function(res)
                    {
                        let original_amount = amount * res.dollar_rate;
                        $('.show_original_amount').html(original_amount+' '+res.currency_name);

                        $('#original_amount').val(original_amount);
                    }

                })
            }
            else
            {

            }

        }
    }
</script>

@endsection
