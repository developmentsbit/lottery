@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        Member Post
        @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date & Time</th>
                                    <th>Post Type</th>
                                    <th>Amount</th>
                                    <th>Contact Type</th>
                                    <th>Contact Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($params['data']))
                                @foreach ($params['data'] as $v)
                                <tr>
                                    <td>
                                        {{ App\Traits\Date::DbToOriginal('-',$v->date) }} || {{ App\Traits\Date::twelveHrTime($v->time) }}
                                    </td>
                                    <td>
                                        {{$v->post_type}}
                                    </td>
                                    <td>
                                        {{ $v->amount }}
                                    </td>
                                    <td>
                                        {{ $v->contact_type }}
                                    </td>
                                    <td>
                                        {{$v->contact_number}}
                                    </td>
                                    <td>
                                        @if($v->status == 1)
                                        <a class="btn btn-sm btn-success" href="{{ route('member_post.status',$v->id) }}">Active</a>
                                        @else
                                        <a class="btn btn-sm btn-danger" href="{{ route('member_post.status',$v->id) }}">Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('member_post.destroy',$v->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Are You Sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
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
        $("#datatables-reponsive").DataTable();
    });
</script>
    @endpush

@endsection
