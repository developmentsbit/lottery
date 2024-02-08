@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('photo_info.index_title')
        @endslot

        @if(Auth::user()->can('Payment Method create'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        photo_info.create
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-plus
        @endslot
        @slot('btn_name')
        @lang('photo_info.create_new')
        @endslot

        @if(Auth::user()->can('Payment Method trash'))
        {{-- for deleted list index 
        @slot('deleted_list_btn_name')
        @lang('photo_info.deleted_list')
        @endslot

        @slot('deleted_list_route')
        photo_info.trash_list
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
                                            <th>@lang('photo_info.title_en')</th>
                                            <th>@lang('photo_info.title_bn')</th>
                                            <th>@lang('photo_info.image')</th>
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
                                use App\Models\photo_info;
                                $data=  photo_info::onlyTrashed()->get();
                                $sl=1;
                                @endphp

                                <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('photo_info.title_en')</th>
                                            <th>@lang('photo_info.title_bn')</th>
                                            <th>@lang('photo_info.image')</th>
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
                                            <td><img src="{{asset('/Backend/img/photo_info')}}/{{$v->image}}" style="max-height: 100px;"></td>
                                            <td>{{$v->status}}</td>
                                            <td>
                                            <a href="{{ url('photo_info_restore') }}/{{ $v->id }}" class="btn btn-sm btn-info">@lang('common.restore')</a>
                                            <a href="{{ url('photo_info_delete') }}/{{ $v->id }}" class="btn btn-sm btn-danger">@lang('common.permenantly_delete')</a>  
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
            ajax: "{{ route('photo_info.index') }}",
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

    function ChangePhotoInfoStatus(id)
    {
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('photo_info.status') }}',

            type : 'GET',

            data : {id},

            success : (res) => {
                window.notyf.open({
                    type: "success",
                    message: @json(__('photo_info.status_message')),
                    duration: 1000,
                    ripple: true,
                    dismissible: false,
                    position: {
                        x: "right",
                        y: "top"
                    }
                });
            }
        })
    }
</script>

@endpush

@endsection
