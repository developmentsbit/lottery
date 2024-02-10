@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('game_setup.index_title')
        @endslot

        @if(Auth::user()->can('Payment Method create'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        game_setup.create
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-plus
        @endslot
        @slot('btn_name')
        @lang('game_setup.create_new')
        @endslot

        @if(Auth::user()->can('Payment Method trash'))
        {{-- for deleted list index 
        @slot('deleted_list_btn_name')
        @lang('game_setup.deleted_list')
        @endslot

        @slot('deleted_list_route')
        game_setup.trash_list
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
                                            <th>@lang('game_setup.game_title_en')</th>
                                            <th>@lang('game_setup.game_title_bn')</th>
                                            <th>@lang('game_setup.start_date')</th>
                                            <th>@lang('game_setup.end_date')</th>
                                            <th>@lang('game_setup.start_time')</th>
                                            <th>@lang('game_setup.end_time')</th>
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
                                use App\Models\game_setup;
                                $data=  game_setup::onlyTrashed()->get();
                                $sl=1;
                                @endphp

                                <table id="alternative-page-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>@lang('common.sl')</th>
                                            <th>@lang('game_setup.game_title_en')</th>
                                            <th>@lang('game_setup.game_title_bn')</th>
                                            <th>@lang('game_setup.start_date')</th>
                                            <th>@lang('game_setup.end_date')</th>
                                            <th>@lang('game_setup.start_time')</th>
                                            <th>@lang('game_setup.end_time')</th>
                                            <th>@lang('common.status')</th>
                                            <th>@lang('common.actions')</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if($data)
                                        @foreach ($data as $v)
                                        <tr>
                                            <td>{{$sl++}}</td>
                                            <td>{{$v->game_title}}</td>
                                            <td>{{$v->game_title_bn}}</td>
                                            <td>{{$v->start_date}}</td>
                                            <td>{{$v->end_date}}</td>
                                            <td>{{$v->start_time}}</td>
                                            <td>{{$v->end_time}}</td>
                                            <td>
												@if($v->status == 1)
												<span class="btn btn-success btn-sm">@lang('common.active')</span>
												@else
												<span class="btn btn-danger btn-sm">@lang('common.inactive')</span>
												@endif
											</td>
                                            <td>
                                            <a href="{{ url('game_setup_restore') }}/{{ $v->id }}" class="btn btn-sm btn-info">@lang('common.restore')</a>
                                            <a href="{{ url('game_setup_delete') }}/{{ $v->id }}" class="btn btn-sm btn-danger">@lang('common.permenantly_delete')</a>  
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
            ajax: "{{ route('game_setup.index') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'game_title', name: 'game_title'},
                {data: 'game_title_bn', name: 'game_title_bn'},
                {data: 'start_date', name: 'start_date'},
                {data: 'end_date', name: 'end_date'},
                {data: 'start_time', name: 'start_time'},
                {data: 'end_time', name: 'end_time'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>

@endpush

@endsection
