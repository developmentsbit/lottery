@extends('member.dashboard.master')
@section('member_dash_title')
@lang('frontend.home')
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
            Lottery Information
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Select Game</th>
                    <td>:</td>
                    <td>
                        <select class="form-control form-control-sm" onchange="showSet();showLotteryForm()" name="game" id="game">
                            <option value="">Select Game</option>
                            <option value="1st_prize_six_digit">1st. Prize Six Digits</option>
                            <option value="3up">3 Up</option>
                            <option value="2up">2 Up</option>
                            <option value="2down">2 Down</option>
                            <option value="1of3upsingledigit">1 Of 3 Up Single Digit</option>
                            <option value="1of2upsingledigit">1 Of 2 Up Single Digit</option>
                            <option value="1of2updowndigit">1 Of 2 Down Single Digit</option>
                            <option value="3upgamettotal">3 Up Game Total</option>
                            <option value="2upgamettotal">2 Up Game Total</option>
                            <option value="2downgametotal">2 Down Game Total</option>
                        </select>
                    </td>
                </tr>
                <tr class="d-none set">
                    <th>Select Set</th>
                    <td>:</td>
                    <td>
                        <select class="form-control form-control-sm" id="set" name="set" onchange="showLotteryForm()">
                            <option value="">Select One</option>
                            @for ($i = 1; $i <= 100; $i++)
                            <option value="{{ $i }}">{{$i}}</option>
                            @endfor
                        </select>
                    </td>
                </tr>
            </table>

            <div class="show_form mt-2">

            </div>
        </div>
    </div>
</div>

<script>
    function showLotteryForm()
    {
        let game = $('#game').val();
        let set = $('#set').val();
        let sl = 0;

        if(game != '' && set > 0)
        {
            if(game == '1st_prize_six_digit')
            {
                let formData = `<table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th>SN</th>
                            <th>Lottery Number 6</th>
                            <th>Direct Amount</th>
                            <th>Rumble Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">`;
                        for (let index = 0; index < set; index++)
                        {
                            formData += `<tr>
                                <td>`;
                                    formData += sl = sl + 1;
                                formData += `</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="lottery_number[]" id="lottery_number-${index}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="direct_amount[]" id="direct_amount-${index}" onkeyup="calculateDirectAmount()" value="0">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="rumble_amount[]" id="rumble_amount-${index}">
                                </td>
                            </tr>`;
                        }
                    formData += `</tbody>
                    <tfoot class="table-success">
                        <tr>
                            <td colspan="3" style="text-align: right">
                                Total Amount
                            </td>
                            <td id="">
                                <span id="totalAmount">$</span>
                                <input type="hidden" name="totalAmount" id="total_amount" value="0">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: right">
                                Continue Discount (30.00%)
                            </td>
                            <td>
                                $
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: right">
                                Bet Amount
                            </td>
                            <td>
                                $
                            </td>
                        </tr>
                    </tfoot>
                </table>`;

                $('.show_form').html(formData);
            }
        }
    }
</script>

<script>
    function calculateDirectAmount()
    {
        let totalAmount = 0;
       let direct_amount_array = $('input[name="direct_amount[]"]').length;

       for (let index = 0; index < direct_amount_array; index++)
       {
            let direct_amount = $('#direct_amount-'+index).val();

            totalAmount = parseInt(totalAmount) + parseInt(direct_amount);
       }
    //    console.log(totalAmount);
       $('#totalAmount').html('$'+totalAmount);
       $('#total_amount').val(totalAmount);
    }
</script>

<script>
    function showSet()
    {
        let game = $('#game').val();
        if(game != '')
        {
            $('.set').removeClass('d-none');
        }
        else
        {
            $('.set').addClass('d-none');
        }
    }
</script>

@endsection
