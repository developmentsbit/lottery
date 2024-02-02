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

        let show_discount_per;
        let max_length;

        if(game == '1st_prize_six_digit')
        {
            show_discount_per = 30.5;
            max_length = 6;
        }
        else if(game == '3up')
        {
            show_discount_per = 30;
            max_length = 3;
        }
        else if(game == '2up')
        {
            show_discount_per = 15;
            max_length = 2;
        }
        else if(game == '2down')
        {
            show_discount_per = 15;
            max_length = 2;
        }
        else
        {
            show_discount_per = 0;
            max_length =  1;
        }




        if(game == '1st_prize_six_digit' || game == '3up' || game == '2up' || game == '2down' )
        {
            if(set > 0)
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
                                    <input type="text" class="form-control form-control-sm" name="lottery_number[]" id="lottery_number-${index}" maxlength="${max_length}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="direct_amount[]" id="direct_amount-${index}" onkeyup="calculateDirectAmount()" value="0">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" onkeyup="calculateDirectAmount()" name="rumble_amount[]" id="rumble_amount-${index}" value="0">
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
                                Continue Discount (${show_discount_per}%)
                            </td>
                            <td>
                                    <span id="discountedAmount">$</span>
                                    <input type="hidden" name="cont_discount" id="contDiscount" value="${show_discount_per}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: right">
                                Bet Amount
                            </td>
                            <td>
                                <span id="betAmountText">$</span>
                                <input type="hidden" name="bet_amount" id="betAmount" value="0">
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="col-12" style="text-align:right;margin-top : 10px;">
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                </div>`;

                $('.show_form').html(formData);
            }

        }
        else
            {
                let formData = `<table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th>SN</th>
                            <th>Lottery Number 6</th>
                            <th>Direct Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">`;
                        for (let index = 0; index < 10; index++)
                        {
                            formData += `<tr>
                                <td>`;
                                    formData += sl = sl + 1;
                                formData += `</td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="lottery_number[]" id="lottery_number-${index}" maxlength="${max_length}">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="direct_amount[]" id="direct_amount-${index}" onkeyup="calculateDirectAmount()" value="0">
                                </td>
                            </tr>`;
                        }
                    formData += `</tbody>
                    <tfoot class="table-success">
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Total Amount
                            </td>
                            <td id="">
                                <span id="totalAmount">$</span>
                                <input type="hidden" name="totalAmount" id="total_amount" value="0">
                            </td>
                        </tr>
                        <tr class="d-none">
                            <td colspan="2" style="text-align: right">
                                Continue Discount (${show_discount_per}%)
                            </td>
                            <td>
                                    <span id="discountedAmount">$</span>
                                    <input type="hidden" name="cont_discount" id="contDiscount" value="${show_discount_per}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Bet Amount
                            </td>
                            <td>
                                <span id="betAmountText">$</span>
                                <input type="hidden" name="bet_amount" id="betAmount" value="0">
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="col-12" style="text-align:right;margin-top : 10px;">
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                </div>`;

                $('.show_form').html(formData);
            }
    }
</script>

<script>
    function calculateDirectAmount()
    {
        let totalAmount = 0;
        let game = $('#game').val();
       let direct_amount_array = $('input[name="direct_amount[]"]').length;

       for (let index = 0; index < direct_amount_array; index++)
       {
            let direct_amount = $('#direct_amount-'+index).val();

            if(game == '1st_prize_six_digit' || game == '3up' || game == '2up' || game =='2down')
            {

                let rumble_amount = $('#rumble_amount-'+index).val();
                totalAmount = parseInt(totalAmount) + parseInt(direct_amount) + parseInt(rumble_amount);
            }
            else
            {
                totalAmount = parseInt(totalAmount) + parseInt(direct_amount);
            }

       }
    //    console.log(totalAmount);
       $('#totalAmount').html('$'+totalAmount);
       $('#total_amount').val(totalAmount);

       let discount_per = $('#contDiscount').val();

       let discount = parseInt(totalAmount) * parseInt(discount_per) / 100;

       $('#discountedAmount').html('$ '+ discount);

       let bet_amount = parseInt(totalAmount) - parseInt(discount);

       $('#betAmountText').html('$ '+ bet_amount);
       $('#betAmount').val(bet_amount);
    }
</script>

<script>
    function showSet()
    {
        let game = $('#game').val();
        if(game == '1st_prize_six_digit' || game == '3up' || game == '2up' || game =='2down')
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
