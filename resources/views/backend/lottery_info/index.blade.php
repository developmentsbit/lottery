@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('lottery.index_title')
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

        @if(Auth::user()->can('Lottery trash'))
        {{-- for deleted list index --}}
        @slot('deleted_list_btn_name')
        Rejected List
        @endslot

        @slot('deleted_list_route')
        lottery_info.trash_list
        @endslot
        @endif


        @endcomponent
        <div class="row">
            <div class="col-3">
                <select class="form-control" name="" id="" onchange="">
                    <option>---Select Game---</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>@lang('common.sl')</th>
                                        <th>Date & Time</th>
                                        <th>@lang('lottery.invoice_no')</th>
                                        <th>@lang('lottery.game_name')</th>
                                        <th>@lang('lottery.slot')</th>
                                        <th>@lang('lottery.total_amount')</th>
                                        <th>@lang('lottery.discount')</th>
                                        <th>@lang('lottery.bet_amount')</th>
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
            ajax: "{{ route('lottery_info.index') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'date_time', name: 'date_time'},
                {data: 'invoice_no', name: 'invoice_no'},
                {data: 'game_name', name: 'game_name'},
                {data: 'slot', name: 'slot'},
                {data: 'total_amount', name: 'total_amount'},
                {data: 'discount', name: 'discount'},
                {data: 'bet_amount', name: 'bet_amount'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>



@endpush

@endsection
