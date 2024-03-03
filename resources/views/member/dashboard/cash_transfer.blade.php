@extends('member.dashboard.master')
@section('member_dash_title')
Cash Transfer
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
</style>
<div class="content-wrapper" style="color: black">
    @component('components.user_dashboard_breadcrumb')

    @slot('title2')
       Balance Transfer
    @endslot
    @slot('title3')
       Cash Transfer
    @endslot
   @endcomponent
    <div class="card">
        <div class="card-header">
            Cash Transfer
        </div>
        <div class="card-body">
            <div class="alert alert-warning">
                <span>Cash Transfer Fees 3.00%</span>

            </div>
            <form method="post" action="{{ route('member.balance_transfer') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="post_type" value="cash_transfer">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <label>Select Member</label><span class="text-danger">*</span>
                        <select class="form-control form-control-sm select2" name="member_id" id="member_id" required>
                            <option value="">Select One</option>
                            @if(isset($params['member']))
                            @foreach ($params['member'] as $v)
                            @if($v->member_id != Auth::guard('member')->user()->member_id)
                            <option value="{{ $v->member_id }}">{{ $v->member_id.'-'.$v->first_name.' '.$v->last_name.'('.$v->mobile_no.')' }}</option>
                            @endif
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-2">
                        <label>Amount</label><span class="text-danger">*</span>
                        <div class="input-group">
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required autocomplete="off">
                            <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                        </div>
                    </div>
                </div>

                    <div class="col-12 mt-2 text-center">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    </div>

            </form>
        </div>
    </div>
</div>

<script>
    function getMethodInfo()
    {
        let method = $('#method').val();

        if(method != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('member.get_method_info') }}',

                type : 'GET',

                data : {method},

                success : (res) => {
                    $('.message').html(res);
                },
            })
        }
        else
        {
            $('.message').html('');
        }
    }
</script>

@endsection
