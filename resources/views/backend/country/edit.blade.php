@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Edit Country
        @endslot

        @if(Auth::user()->can('Country Setup index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        country_setup.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        View All Country
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('country_setup.update',$params['data']->id)}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="name">Country Name</label><span class="text-danger">*</span>
                                <input type="text" name="name" class="form-control  mt-1 @error('name') is-invalid @enderror" id="name" value="{{ $params['data']->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="dollar_rate">Dollar Rate</label>
                                <input type="text" name="dollar_rate" class="form-control  mt-1  @error('dollar_rate') is-invalid @enderror" id="dollar_rate" value="{{ $params['data']->dollar_rate }}">
                                @error('dollar_rate')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="currency_name">Currency Name</label>
                                <input type="text" name="currency_name" class="form-control  mt-1  @error('currency_name') is-invalid @enderror" id="currency_name" value="{{ $params['data']->currency_name }}">
                                @error('currency_name')
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
