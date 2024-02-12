@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('mission_vision.index_title')
        @endslot

        @if(Auth::user()->can('Payment Method create'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        mission_vision.create
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-plus
        @endslot
        @slot('btn_name')
        @lang('mission_vision.create_new')
        @endslot

        @if(Auth::user()->can('Payment Method trash'))
        {{-- for deleted list index 
        @slot('deleted_list_btn_name')
        @lang('mission_vision.deleted_list')
        @endslot

        @slot('deleted_list_route')
        mission_vision.trash_list
        @endslot --}}
        @endif

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#users-tab-all" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    @lang('common.all')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#users-tab-deleted" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    @lang('common.deleted_list')
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="users-tab-all">
                                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('mission_vision.title_en')</th>
                                            <th>@lang('mission_vision.title_bn')</th>
                                            <th>@lang('mission_vision.image')</th>
                                            <th>@lang('common.status')</th>
                                            <th>@lang('common.actions')</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div> <!-- end all-->

                            <div class="tab-pane" id="users-tab-deleted">
                                @php
                                use App\Models\missionvision;
                                $data=  missionvision::onlyTrashed()->get();
                                $sl=1;
                                @endphp

                                <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('mission_vision.title_en')</th>
                                            <th>@lang('mission_vision.title_bn')</th>
                                            <th>@lang('mission_vision.image')</th>
                                            <th>@lang('common.status')</th>
                                            <th>@lang('common.actions')</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if($data)
                                        @foreach ($data as $v)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->title_bn}}</td>
                                            <td><img src="{{asset('/Backend/img/mission_vision')}}/{{$v->image}}" style="max-height: 100px;"></td>
                                            <td>{{$v->status}}</td>
                                            <td>
                                            <a href="{{ url('mission_vision_restore') }}/{{ $v->id }}" class="btn btn-sm btn-info">@lang('common.restore')</a>
                                            <a href="{{ url('mission_vision_delete') }}/{{ $v->id }}" class="btn btn-sm btn-danger">@lang('common.permenantly_delete')</a>  
                                            </td>    
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div> <!-- end deleted-->
                        </div> <!-- end tab-content-->
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@push('footer_script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('mission_vision.index') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'title', name: 'title'},
                {data: 'title_bn', name: 'title_bn'},
                {data: 'image', name: 'image'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>

<script>
    function ChangeMissionVisionStatus(id)
    {
        // alert(id);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ url('ChangedMissionVisionStatus') }}/'+id,

            type : 'GET',

            success : function(res)
            {
                toastr.success("Status Changed Successfully");
            }
        });
    }
</script>

@endpush

@endsection
