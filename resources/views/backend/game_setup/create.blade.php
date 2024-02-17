@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('game_setup.create_title')
        @endslot

        @if(Auth::user()->can('Branch index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        game_setup.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('game_setup.view')
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('game_setup.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="game_title ">@lang('game_setup.game_title_en')</label><span class="text-danger">*</span>
                                <input type="text" name="game_title" class="form-control  mt-1 @error('game_title') is-invalid @enderror" id="game_title" value="{{old('game_title')}}">
                                @error('game_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="game_title_bn">@lang('game_setup.game_title_bn')</label>
                                <input type="text" name="game_title_bn" class="form-control  mt-1  @error('game_title_bn') is-invalid @enderror" id="game_title_bn" value="{{old('game_title_bn')}}">
                                @error('game_title_bn')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="start_date">@lang('game_setup.start_date')</label>
                                <input type="date" name="start_date" class="form-control  mt-1  @error('start_date') is-invalid @enderror" id="start_date" value="{{old('start_date')}}">
                                @error('start_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="end_date">@lang('game_setup.end_date')</label>
                                <input type="date" name="end_date" class="form-control  mt-1  @error('end_date') is-invalid @enderror" id="end_date" value="{{old('end_date')}}">
                                @error('end_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="start_time">@lang('game_setup.start_time')</label>
                                <input type="time" name="start_time" class="form-control  mt-1  @error('start_time') is-invalid @enderror" id="start_time" value="{{old('start_time')}}">
                                @error('start_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="end_time">@lang('game_setup.end_time')</label>
                                <input type="time" name="end_time" class="form-control  mt-1  @error('end_time') is-invalid @enderror" id="end_time" value="{{old('end_time')}}">
                                @error('end_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                                <label for="expire_message">@lang('game_setup.expire_message')</label>
                                <textarea class="form-control w-100" rows="4" type="text" name="expire_message" placeholder="@lang('game_setup.expire_message')"></textarea>
                                @error('expire_message')
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
