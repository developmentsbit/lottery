@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('cash_in.trash_title')
        @endslot

        @if(Auth::user()->can('Cash In Request index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        cash_in_request.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        All List
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
                                        <th>@lang('cash_in.member')</th>
                                        <th>@lang('cash_in.method')</th>
                                        <th>@lang('cash_in.amount')</th>
                                        <th>@lang('cash_in.payment_account')</th>
                                        <th>@lang('cash_in.trx_id')</th>
                                        {{-- <th>@lang('common.status')</th> --}}
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
            ajax: "{{ route('cash_in_request.trash_list') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'member', name: 'member'},
                {data: 'method', name: 'method'},
                {data: 'balance', name: 'balance'},
                {data: 'payment_account', name: 'payment_account'},
                {data: 'transaction_id', name: 'transaction_id'},
                // {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>



@endpush

@endsection
