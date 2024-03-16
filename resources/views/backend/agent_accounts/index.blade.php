@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        All Accounts
        @endslot

        @if(Auth::user()->can('Agent Accounts create'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        agent_accounts.create
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-plus
        @endslot
        @slot('btn_name')
        Create New
        @endslot

        @endif


        {{-- @if(Auth::user()->can('Agent trash'))
        @slot('deleted_list_btn_name')
        Deleted Agent
        @endslot

        @slot('deleted_list_route')
        agent.trash_list
        @endslot

        @endif --}}

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>@lang('common.sl')</th>
                                    <th>Agent</th>
                                    <th>Number</th>
                                    <th>Account Name</th>
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
            ajax: "{{ route('agent_accounts.index') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'agent', name: 'agent'},
                {data: 'number', name: 'number'},
                {data: 'account_name', name: 'account_name'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
{{--
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
--}}
@endpush

@endsection
