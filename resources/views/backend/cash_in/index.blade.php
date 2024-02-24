@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('cash_in.index_title')
        @endslot

        @if(Auth::user()->can('Payment Method create'))
        {{-- /* Create New Route Will Be goes here */ --}}
        {{-- @slot('route_name')
        payment_method.create
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-plus
        @endslot
        @slot('btn_name')
        @lang('payment_method.create_new')
        @endslot --}}
        @endif

        @if(Auth::user()->can('Cash In Request trash'))
        {{-- for deleted list index --}}
        @slot('deleted_list_btn_name')
        Rejected List
        @endslot

        @slot('deleted_list_route')
        cash_in_request.trash_list
        @endslot
        @endif


        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('common.sl')</th>
                                        <th>Date & Time</th>
                                        <th>@lang('cash_in.member')</th>
                                        <th>@lang('cash_in.method')</th>
                                        <th>@lang('cash_in.amount')</th>
                                        <th>Paid Amount</th>
                                        <th>@lang('cash_in.payment_account')</th>
                                        <th>@lang('cash_in.trx_id')</th>
                                        <th>Document</th>
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
    </div>
</main>

@push('footer_script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('cash_in_request.index') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'date_time', name: 'date_time'},
                {data: 'member', name: 'member'},
                {data: 'method', name: 'method'},
                {data: 'balance', name: 'balance'},
                {data: 'original_amount', name: 'original_amount'},
                {data: 'payment_account', name: 'payment_account'},
                {data: 'transaction_id', name: 'transaction_id'},
                {data: 'document', name: 'document'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>



@endpush

@endsection
