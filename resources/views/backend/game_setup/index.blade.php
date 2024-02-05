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
        {{-- for deleted list index --}}
        @slot('deleted_list_btn_name')
        @lang('game_setup.deleted_list')
        @endslot

        @slot('deleted_list_route')
        game_setup.trash_list
        @endslot
        @endif

        @endif

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
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

<script>

    function GameSetupStatus(id)
    {
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('game_setup.status') }}',

            type : 'GET',

            data : {id},

            success : (res) => {
                window.notyf.open({
                    type: "success",
                    message: @json(__('game_setup.status_message')),
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
