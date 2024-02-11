@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('cash_in_request.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="branch_name_en">Select Member</label><span class="text-danger">*</span>
                                <select class="form-control choices-single member_id @error('member_id') is-invalid @enderror" name="member_id" id="member_id">
                                    <option value="">@lang('common.select_one')</option>
                                    @if(isset($params['member']))
                                    @foreach ($params['member'] as $v)
                                    <option @if(old('member_id') == $v->member_id) selected @endif value="{{ $v->member_id }}">{{ $v->member_id.' - '.$v->first_name.' '.$v->last_name }}</option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('member_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="branch_name_en">Transaction Type</label><span class="text-danger">*</span>
                                <select class="form-control choices-single transaction_type @error('transaction_type') is-invalid @enderror" name="transaction_type" id="transaction_type">
                                    <option value="">@lang('common.select_one')</option>
                                    <option @if(old('transaction_type') == 1) selected @endif value="1">Balance</option>
                                    <option @if(old('transaction_type') == 5) selected @endif value="5">Win Balance</option>
                                </select>
                                @error('transaction_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="branch_name_en">Amount</label><span class="text-danger">*</span>
                                <div class="input-group">
                                    <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount" value="{{ old('amount') }}">
                                    <span class="input-group-text">$</span>
                                </div>
                                @error('amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="branch_name_en">Payment Account</label>
                                <div class="input-group">
                                    <input type="number" class="form-control @error('payment_account') is-invalid @enderror" name="payment_account" id="payment_account" value="{{ old('payment_account') }}">

                                </div>
                                @error('payment_account')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mt-4" style="text-align: right">
                                <button type="submit" id="submit" class="btn  btn-success"> <i class="fa fa-save"></i> @lang('common.save_now')</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

{{-- @push('footer_script')
<script>

    $('#formData').submit(function(e){
        e.preventDefault();
        let formData = $('#formData').serialize();
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },
            url : '{{route('menu_label.store')}}',
            type : 'POST',
            data : formData,
            success : function(response)
            {

            },
            error: function (xhr) {
            $.each(xhr.responseJSON.errors, function(key,value) {
                $('#error_'+key).html(value);
                $('input#'+key).addClass('is-invalid');
            });
            },
        });
    });

</script>
@endpush --}}

@endsection
