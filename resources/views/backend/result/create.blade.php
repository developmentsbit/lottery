@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')
        @slot('title')
        Publish Result
        @endslot

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('result.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="draw_date">Draw Date</label><span class="text-danger">*</span>
                                <input type="text" name="draw_date" class="form-control  mt-1 @error('draw_date') is-invalid @enderror" id="draw_date" value="{{old('draw_date')}}" required autocomplete="off">
                                @error('draw_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="first_prize">1st Prize</label><span class="text-danger">*</span>
                                <input type="text" name="first_prize" class="form-control  mt-1 @error('first_prize') is-invalid @enderror" id="first_prize" value="{{old('first_prize')}}" required maxlength="6" autocomplete="off">
                                @error('first_prize')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="three_up">3 Up</label><span class="text-danger">*</span>
                                <input type="text" name="three_up" class="form-control  mt-1 @error('three_up') is-invalid @enderror" id="three_up" value="{{old('three_up')}}" required maxlength="3" autocomplete="off">
                                @error('three_up')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="two_up">2 Up</label><span class="text-danger">*</span>
                                <input type="text" name="two_up" class="form-control  mt-1 @error('two_up') is-invalid @enderror" id="two_up" value="{{old('two_up')}}" required maxlength="2" autocomplete="off">
                                @error('two_up')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="two_down">2 Down</label><span class="text-danger">*</span>
                                <input type="text" name="two_down" class="form-control  mt-1 @error('two_down') is-invalid @enderror" id="two_down" value="{{old('two_down')}}" required maxlength="2" autocomplete="off">
                                @error('two_down')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mt-2">
                                <label for="next_draw">Next Draw Date</label><span class="text-danger">*</span>
                                <input type="text" name="next_draw" class="form-control  mt-1 @error('next_draw') is-invalid @enderror" id="next_draw" value="{{old('next_draw')}}" required autocomplete="off">
                                @error('next_draw')
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


@endsection
