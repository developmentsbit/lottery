@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('payment_method.edit_title')
        @endslot

        @if(Auth::user()->can('Branch index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        payment_method.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('payment_method.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('payment_method.update',$params['data']->id)}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="method_name ">@lang('payment_method.method_name')</label><span class="text-danger">*</span>
                                <input type="text" name="method_name" class="form-control  mt-1 @error('method_name') is-invalid @enderror" id="method_name" value="{{ $params['data']->method_name }}">
                                @error('method_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="method_name_bn">@lang('payment_method.method_name_bn')</label>
                                <input type="text" name="method_name_bn" class="form-control  mt-1  @error('method_name_bn') is-invalid @enderror" id="method_name_bn" value="{{$params['data']->method_name_bn}}">
                                @error('method_name_bn')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="vat">WWithdraw Vat(%)</label> <span class="text-danger">*</span>
                                <input type="number" name="vat" class="form-control  mt-1  @error('vat') is-invalid @enderror" id="vat" value="{{$params['data']->vat}}">
                                @error('vat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                <label for="number">@lang('payment_method.number')</label>
                                <textarea class="form-control" name="number" id="number" placeholder="@lang('payment_method.number_place')">{!! $params['data']->number !!}</textarea>
                                @error('number')
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
