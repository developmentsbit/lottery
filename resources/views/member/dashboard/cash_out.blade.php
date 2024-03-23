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
        <p><h5><i class="fa fa-window-restore" aria-hidden="true"></i> Minimum Per Withdrawal Amount is $100.00 Maximum Per Withdrawal Amount is $1000.00</h5></p>
        <p><h5><i class="fa fa-window-restore" aria-hidden="true"></i> Withdrawal Payment 6 working days.(Only Mobile Banking Withdrawal time 2 working Day.)</h5></p>
        <p><h5><i class="fa fa-window-restore" aria-hidden="true"></i> Skrill 8%, Visa 8%, Master Card 7%, Perfect Money 10% & Mobile Banking 8% Vat With Deduction.</h5></p>
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
                        {{--<div class="message mt-2">

                        </div>--}}
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2 d-none" id="country_box">
                        <label>Select Country</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm" name="country" id="country" onchange="getAgentList();getOriginalAmountCashout();">
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
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onkeyup="getOriginalAmountCashout()" autocomplete="off">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                        <div class="show_original_amount p-2">
                        </div>
                        <input type="hidden" id="original_amount" name="original_amount">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-2">
                        <label>Your Payment Account</label>
                        <!-- <input type="text" class="form-control" name="payment_account" id="payment_account" placeholder="Your Payment Account Number" required autocomplete="off"> -->
                        <textarea name="payment_account" class="form-control" id="payment_account" cols="5" rows="2" placeholder="Your Payment Account Number" required autocomplete="off"></textarea>
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

        let type = 'cashout';

        if(country != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_agent_accounts') }}',

                type : 'POST',

                data : {agent_id,type},

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


    function getOriginalAmountCashout()
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

                    url : '{{ route('member.get_original_amount_cashout') }}',

                    type : "POST",

                    data : {country_id},

                    success : function(res)
                    {
                        // alert(res);

                        let vatper = 8;


                        let vatamount = amount * vatper / 100;


                        let amountwithvat = parseInt(amount) - parseInt(vatamount);

                        let result = amountwithvat * res.dollar_rate;

                        let original_amount = Number(result).toFixed(2);

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
