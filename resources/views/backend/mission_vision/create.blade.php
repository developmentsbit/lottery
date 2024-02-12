@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('mission_vision.create_title')
        @endslot

        @if(Auth::user()->can('Branch index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        mission_vision.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('mission_vision.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('mission_vision.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="title ">@lang('mission_vision.title_en')</label><span class="text-danger">*</span>
                                <input type="text" name="title" class="form-control  mt-1 @error('title') is-invalid @enderror" id="title" value="{{old('title')}}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="title_bn">@lang('mission_vision.title_bn')</label>
                                <input type="text" name="title_bn" class="form-control  mt-1  @error('title_bn') is-invalid @enderror" id="title_bn" value="{{old('title_bn')}}">
                                @error('title_bn')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="details">@lang('mission_vision.details_en')</label>
                                <textarea class="form-control w-100" rows="8" type="text" name="details" placeholder="@lang('mission_vision.details')"></textarea>
                                @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="details_bn">@lang('mission_vision.details_bn')</label>
                                <textarea class="form-control w-100" rows="8" type="text" name="details_bn" placeholder="@lang('mission_vision.details_bn')"></textarea>
                                @error('details_bn')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                <label for="image">@lang('mission_vision.image')</label>
                                <input type="file" name="image" class="form-control  mt-1  @error('image') is-invalid @enderror" id="image" value="{{old('image')}}">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="status">@lang('common.status')</label><span class="text-danger">*</span>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="radio" value="1" name="status" checked>
                                        <span class="form-check-label">
                                            @lang('common.active')
                                        </span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="radio" value="0" name="status">
                                        <span class="form-check-label">
                                            @lang('common.inactive')
                                        </span>
                                    </label>
                                </div>
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
