@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('banner.create_title')
        @endslot

        @if(Auth::user()->can('Software Info index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        banner.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('banner.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('banner.update',$data->id)}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                        <label for="image">@lang('banner.image')</label><br>
                                        <div style="text-align: center;">
                                            @php
                                            $image = public_path().'/Backend/settings/'.$data->image;
                                            @endphp
                                            @if(file_exists($image))
                                            <img src="{{asset('Backend/settings')}}/{{$data->image}}" alt="image" class="img-fluid" style="height: 80px;width:90px;">
                                            @endif
                                        </div>
                                        <input type="file" name="image" class="form-control  mt-1 @error('image') is-invalid @enderror" id="image" value="{{old('image')}}">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                        <label for="title">@lang('banner.title')</label><span class="text-danger">*</span>
                                        <input type="text" name="title" class="form-control  mt-1 @error('title') is-invalid @enderror" id="title" value="{{$data->title}}">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4" style="text-align: right">
                                    <button type="submit" id="submit" class="btn  btn-success"> <i class="fa fa-save"></i> @lang('common.update')</button>
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
