@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Edit Agent Accounts
        @endslot

        @if(Auth::user()->can('Agent Accounts index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        agent_accounts.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        View Agent Accounts
        @endslot

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('agent_accounts.update',$params['data']->id)}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mt-2">
                                <label for="country_id">Select Country</label><span class="text-danger">*</span>
                                <select class="form-control choices-single label_id @error('country_id') is-invalid @enderror" name="country_id" id="country_id" onchange="getAgentList()">
                                    <option value="">@lang('common.select_one')</option>
                                    @foreach ($params['country'] as $v)
                                    <option @if($params['agent_country']->country_id == $v->id) selected @endif value="{{$v->id}}"> {{ $v->name }} </option>
                                    @endforeach
                                </select>
                                @error('agent_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mt-2">
                                <label for="agent_id">Select Agent</label><span class="text-danger">*</span>
                                <select class="form-control choices-single label_id @error('agent_id') is-invalid @enderror" name="agent_id" id="agent_id">
                                    <option value="">@lang('common.select_one')</option>
                                    @foreach ($params['agents'] as $v)
                                    <option @if($params['data']->agent_id == $v->id) selected @endif value="{{$v->id}}"> {{ $v->name }} </option>
                                    @endforeach
                                </select>
                                @error('agent_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="number">Number</label><span class="text-danger">*</span>
                                <input type="number" name="number" class="form-control  mt-1  @error('number') is-invalid @enderror" id="number" value="{{$params['data']->number}}">
                                @error('number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                <label for="account_name">Account Name</label><span class="text-danger">*</span>
                                <input type="text" name="account_name" class="form-control  mt-1 @error('account_name') is-invalid @enderror" id="account_name" value="{{$params['data']->account_name}}">
                                @error('name')
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

@push('footer_script')
<script>

 function getAgentList()
 {
    let country_id = $('#country_id').val();
    if(country_id != '')
    {
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ url('getAgentList') }}',

            type : "POST",

            data : {country_id},

            success : function(res)
            {
                $('#agent_id').html(res);
            }
        })
    }
 }

</script>
@endpush

@endsection
