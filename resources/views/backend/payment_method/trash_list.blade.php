@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('payment_method.trash_list')
        @endslot

        @if(Auth::user()->can('Payment Method index'))
        {{-- /* Create New Route Will Be goes here */ --}}
        @slot('route_name')
        payment_method.index
        @endslot
        @slot('btn_class')
        btn btn-primary
        @endslot
        @slot('icon')
        fa fa-eye
        @endslot
        @slot('btn_name')
        @lang('payment_method.view')
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
                                        <th>@lang('payment_method.method_name')</th>
                                        <th>@lang('payment_method.number')</th>
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
            ajax: "{{ route('payment_method.trash_list') }}",
            columns: [
                {data: 'sl', name: 'sl'},
                {data: 'method_name', name: 'method_name'},
                {data: 'number', name: 'number'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>

<script>

    function PayMethodStatus(id)
    {
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('payment_method.status') }}',

            type : 'GET',

            data : {id},

            success : (res) => {
                window.notyf.open({
                    type: "success",
                    message: @json(__('payment_method.staus_message')),
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
