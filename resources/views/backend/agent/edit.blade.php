@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Edit Agent
        @endslot

        @if(Auth::user()->can('Agent index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        agent.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        View Agent
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('agent.update',$params['data']->id)}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mt-2">
                                <label for="country_id">Select Country</label><span class="text-danger">*</span>
                                <select class="form-control choices-single label_id @error('country_id') is-invalid @enderror" name="country_id" id="country_id">
                                    <option value="">@lang('common.select_one')</option>
                                    @foreach ($params['country'] as $v)
                                    <option @if($params['data']->country_id == $v->id) selected @endif value="{{$v->id}}"> {{ $v->name }} </option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="name">Agent Name</label><span class="text-danger">*</span>
                                <input type="text" name="name" class="form-control  mt-1 @error('name') is-invalid @enderror" id="name" value="{{ $params['data']->name }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control  mt-1  @error('phone') is-invalid @enderror" id="phone" value="{{$params['data']->phone }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control  mt-1  @error('email') is-invalid @enderror" id="email" value="{{$params['data']->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control  mt-1  @error('image') is-invalid @enderror" id="image" value="{{old('image')}}">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <img src="{{ asset('AgentImage') }}/{{ $params['data']->image }}" alt="" style="height: 80px;">
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
