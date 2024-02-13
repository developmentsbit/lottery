@extends('member.dashboard.master')
@section('member_dash_title')
@lang('frontend.home')
@endsection
@section('body')

<div class="content-wrapper" style="color: black">
    <div class="col-12">
        <div class="card">
            @if(isset($params['data']))
            @foreach ($params['data'] as $d)
            <div class="card-header">
                Hello Mr. {{$d->first_name}} {{$d->last_name}}
            </div>
            <div class="card-body">
                <form action="{{route('personal_profile.update',$d->id)}}" enctype="multipart/form-data" id="formData">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-2">
                            <label>Mobile No :</label>
                            <b><span>{{$d->mobile_no}}</span></b>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="first_name">First Name</label><span class="text-danger">*</span>
                            <input type="text" name="first_name" class="form-control  mt-1 @error('first_name') is-invalid @enderror" id="first_name" value="{{$d->first_name}}">
                            @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="last_name">Last Name</label><span class="text-danger">*</span>
                            <input type="text" name="last_name" class="form-control  mt-1 @error('last_name') is-invalid @enderror" id="last_name" value="{{$d->last_name}}">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="gender">Gender</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('gender') is-invalid @enderror" name="gender" id="gender">
                                <option @if($d['gender'] == 'Male') selected @endif value="Male">Male</option>
                                <option @if($d['gender'] == 'Female') selected @endif value="Female">Female</option>
                                <option @if($d['gender'] == 'Others') selected @endif value="Others">Others</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="city">City</label><span class="text-danger">*</span>
                            <input type="text" name="city" class="form-control  mt-1 @error('city') is-invalid @enderror" id="city" value="{{$d->city}}">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="country">Country</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('country') is-invalid @enderror" name="country" id="country">
                                @if(isset($params['country']))
                                @foreach ($params['country'] as $v)
                                <option @if(Auth::guard('member')->user()->country == $v->name) selected @endif value="{{$v->name}}">{{$v->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="nationality">Nationality</label><span class="text-danger">*</span>
                            <select class="form-control form-control-sm @error('nationality') is-invalid @enderror" name="nationality" id="nationality">
                                @if(isset($params['country']))
                                @foreach ($params['country'] as $v)
                                <option @if(Auth::guard('member')->user()->nationality == $v->name) selected @endif value="{{$v->name}}">{{$v->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <label for="email">Email</label><span class="text-danger">*</span>
                            <input type="text" name="email" class="form-control  mt-1 @error('email') is-invalid @enderror" id="email" value="{{$d->email}}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4" style="text-align: right">
                            <button type="submit" id="submit" class="btn  btn-success"> <i class="fa fa-save"></i> @lang('common.update')</button>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

  @endsection
