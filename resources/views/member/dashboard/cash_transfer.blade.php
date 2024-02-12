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
                <table class="table">
                    <tr>
                        <th>Amount</th>
                        <td>
                            <div class="input-group">
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
                        </td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" required>
                                <span class="input-group-append btn btn-dark" style="border-radius: 0px;">$</span>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="text-align: center">
                            <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        </td>
                    </tr>
                </table>
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
