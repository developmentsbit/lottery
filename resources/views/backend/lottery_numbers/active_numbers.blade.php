@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Active Game Lottery Numbers ({{ $params['game']->game_title }})
        @endslot




        @endcomponent
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Lottery Numbers</th>
                                        <th>Direct Amount</th>
                                        <th>Rumble Amount</th>
                                        <th>Member</th>
                                        <th>Invoice No</th>
                                        <th>Date & Time</th>
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
            ajax: "{{ route('active_lottery_numbers.index') }}",
            columns: [
                {data: 'lottery_number', name: 'lottery_number'},
                {data: 'direct_amount', name: 'direct_amount'},
                {data: 'rumble_amount', name: 'rumble_amount'},
                {data: 'member', name: 'member'},
                {data: 'invoice_no', name: 'invoice_no'},
                {data: 'date_time', name: 'date_time'}, 
            ]
        });
    });
</script>



@endpush

@endsection
