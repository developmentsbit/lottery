@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Registered Members
        @endslot

        @endcomponent
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Referrar</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>City</th>
                                    <th>Nationality</th>
                                    <th>Profile</th>
                                    <th>Status</th>
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
            ajax: "{{ route('registerd_member.index') }}",
            columns: [
                {data: 'member_id', name: 'member_id'},
                {data: 'referral_no', name: 'referral_no'},
                {data: 'name', name: 'name'},
                {data: 'mobile_no', name: 'mobile_no'},
                {data: 'gender', name: 'gender'},
                {data: 'city', name: 'city'},
                {data: 'nationality', name: 'nationality'},
                {data: 'profile', name: 'profile'},
                {data: 'status', name: 'status'},
                // {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>

<script>

    function memberStatus(id)
    {
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{csrf_token()}}'
            },
            url : "{{route('registerd_member.status')}}",
            type : 'POST',
            data: {id},
            beforeSend : function(){

            },
            success : function(response)
            {
                window.notyf.open({
                    type: "success",
                    message: "Member Status Changed",
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
