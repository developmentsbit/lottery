@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('role.create_title')
        @endslot

        @if(Auth::user()->can('Role index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        role.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('role.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('role.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="role_name_en">@lang('role.role_name_en')</label><span class="text-danger">*</span>
                                <input type="text" name="role_name_en" class="form-control  mt-1 @error('role_name_en') is-invalid @enderror" id="role_name_en" value="{{old('role_name_en')}}">
                                @error('role_name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="role_name_bn">@lang('role.role_name_bn')</label>
                                <input type="text" name="role_name_bn" class="form-control  mt-1  @error('role_name_bn') is-invalid @enderror" id="role_name_bn" value="{{old('role_name_bn')}}">
                                @error('role_name_bn')
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
