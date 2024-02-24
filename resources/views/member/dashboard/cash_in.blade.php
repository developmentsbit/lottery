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
                        <select class="form-control form-control-sm" name="method" id="method" onchange="getMethodInfo();getOriginalAmount();" required>
                            <option value="">Select Method</option>
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
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required onchange="return getOriginalAmount()">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                        <div class="show_original_amount p-2">

                        </div>

                        <input type="hidden" name="balance" id="balance">
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

    function getOriginalAmount()
    {
        // alert();
        let method = $('#method').val();
        let amount = $('#amount').val();

        if(method != '' && amount != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_original_amount') }}',

                type : 'GET',

                data : {method,amount},

                success : function(res)
                {
                    let message = '<span class="text-success">You Will Get : <b>'+res+'</b></span>'
                    $('.show_original_amount').html(message);
                    $('#balance').val(res);
                }
            })
        }
    }
</script>

@endsection
