@extends('member.dashboard.master')
@section('member_dash_title')
Thai National Lottery
@endsection
@section('body')
<style>
    th, td{
        border-top: 0px !important;
    }
    span.label {
    font-family: popins;
    font-size: 19px;
}
</style>
<div class="content-wrapper" style="color: black">
    @component('components.user_dashboard_breadcrumb')

    @slot('title2')
       Lottery
    @endslot
    @slot('title3')
       Thai National Lottery
    @endslot
   @endcomponent
    <div class="timer-count">
        <div class="timer-title">Submission Last Time</div>
        <div id="countdown" class="row justify-content-center align-items-center">

        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Thai National Lottery
        </div>
        <div class="card-body p-2">

            @if($params['game']->on_off == 1)
            @if(date('Y-m-d') < $params['game']->end_date || date('H:i:s') < $params['game']->end_time)
            <form method="post" action="{{ route('member.lottery_store') }}">
                @csrf
                <input type="hidden" name="game_status" value="{{ $params['check'] }}">
                <input type="hidden" name="game_id" value="{{ $params['game']->id }}">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-12 mt-2">
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
                    </div>
                    <div class="col-lg-6 col-md-4 col-12 set mt-2 d-none">
                        <select class="form-control form-control-sm" id="set" name="set" onchange="showLotteryForm()">
                            <option value="">Select One</option>
                            @for ($i = 1; $i <= 100; $i++)
                            <option value="{{ $i }}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>


            <div class="show_form mt-2">

            </div>
        </form>
        @else
        <div class="alert alert-danger">
            <b>{{$params['game']->expire_message}}</b>
        </div>
        @endif
        @else
        <div class="alert alert-danger">
            <b>{{$params['game']->expire_message}}</b>
        </div>
        @endif
        </div>
    </div>
</div>

<script>
    function calculateDirectAmount()
    {
        let totalAmount = 0;
        let game = $('#game').val();
       let direct_amount_array = $('input[name="direct_amount[]"]').length;

       for (let index = 0; index < direct_amount_array; index++)
       {
            let normal_direct_amount = $('#direct_amount-'+index).val();

            let direct_amount

            if(normal_direct_amount == '')
            {
                direct_amount = 0;
            }
            else
            {
                direct_amount = parseInt(normal_direct_amount);
            }

            if(game == '1st_prize_six_digit' || game == '3up' || game == '2up' || game =='2down')
            {

                let normal_rumble_amount = $('#rumble_amount-'+index).val();

                let rumble_amount;

                if(normal_rumble_amount == '')
                {
                    rumble_amount = 0;
                }
                else
                {
                    rumble_amount = parseInt(normal_rumble_amount);
                }

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

       $('#discount').val(discount);

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

<script>
    function showLotteryForm()
    {
        let game = $('#game').val();
        let set = $('#set').val();
        let sl = 0;
        let game_title;

        let show_discount_per;
        let max_length;

        if(game == '1st_prize_six_digit')
        {
            show_discount_per = 40;
            max_length = 6;
            game_title = 'Lottery Number 6';
        }
        else if(game == '3up')
        {
            show_discount_per = 30;
            max_length = 3;
            game_title = '3up';
        }
        else if(game == '2up')
        {
            show_discount_per = 15;
            max_length = 2;
            game_title = '2up';
        }
        else if(game == '2down')
        {
            show_discount_per = 15;
            max_length = 2;
            game_title = '2down';
        }
        else
        {
            game_title = 'Lottery Number 1';
            show_discount_per = 0;
            max_length =  1;
        }




        if(game == '1st_prize_six_digit' || game == '3up' || game == '2up' || game == '2down' )
        {
            if(set > 0)
            {
                let formData = `
                <table class=" p-2 "  style="width : 100%">
                    <thead class="">
                        <tr class="table-primary ">

                            <th style="width : 50%;">${game_title}</th>
                            <th style="width : 25%;">Direct Amount</th>
                            <th style="width : 25%;">Rumble Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary ">`;
                        for (let index = 0; index < set; index++)
                        {
                            formData += `<tr>

                                <td>
                                    <input type="number" class="form-control form-control-sm" name="lottery_number[]" id="lottery_number-${index}" onKeyPress="if(this.value.length==${max_length}) return false;" autocomplete="off">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" name="direct_amount[]" id="direct_amount-${index}" onkeyup="calculateDirectAmount()" value="" autocomplete="off">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" onkeyup="calculateDirectAmount()" name="rumble_amount[]" id="rumble_amount-${index}" value="" autocomplete="off">
                                </td>
                            </tr>`;
                        }
                    formData += `</tbody>
                    <tfoot class="table-success ">
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Total Amount :
                            </td>
                            <td id="">
                                <span id="totalAmount">$</span>
                                <input type="hidden" name="totalAmount" id="total_amount" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Continue Discount (${show_discount_per}%) :
                            </td>
                            <td>
                                    <span id="discountedAmount">$</span>
                                    <input type="hidden" name="cont_discount" id="contDiscount" value="${show_discount_per}" autocomplete="off">
                                    <input type="hidden" name="discount" id="discount" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Bet Amount :
                            </td>
                            <td>
                                <span id="betAmountText">$</span>
                                <input type="hidden" name="bet_amount" id="betAmount" value="" autocomplete="off">
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
                let formData = `<table class=" p-2 " style="width : 100%">
                    <thead>
                        <tr class="table-primary ">

                            <th style="width : 75%;">${game_title}</th>
                            <th style="width : 25%;">Direct Amount</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary ">`;
                        for (let index = 0; index < 10; index++)
                        {
                            formData += `<tr>

                                <td>
                                    <input type="number" class="form-control form-control-sm" name="lottery_number[]" id="lottery_number-${index}" onKeyPress="if(this.value.length==${max_length}) return false;" autocomplete="off">
                                </td>
                                <td>
                                    <input type="number" class="form-control form-control-sm" name="direct_amount[]" id="direct_amount-${index}" onkeyup="calculateDirectAmount()" value="" autocomplete="off">
                                </td>
                            </tr>`;
                        }
                    formData += `</tbody>
                    <tfoot class="table-success ">
                        <tr>
                            <td colspan="0" style="text-align: right">
                                Total Amount :
                            </td>
                            <td id="">
                                <span id="totalAmount">$</span>
                                <input type="hidden" name="totalAmount" id="total_amount" value="">
                            </td>
                        </tr>
                        <tr class="d-none">
                            <td colspan="0" style="text-align: right">
                                Continue Discount (${show_discount_per}%) :
                            </td>
                            <td>
                                    <span id="discountedAmount">$</span>
                                    <input type="hidden" name="cont_discount" id="contDiscount" value="${show_discount_per}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="0" style="text-align: right">
                                Bet Amount :
                            </td>
                            <td>
                                <span id="betAmountText">$</span>
                                <input type="hidden" name="bet_amount" id="betAmount" value="">
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

@push('footer_script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('MemberAsset/js/countdown.jquery.js') }}"></script>
<script>
    // alert();
    const cd = new Date().getFullYear() + 1;
    $('#countdown').countdown({
        year: '{{ $params['year'] }}', // YYYY Format
        month: '{{ $params['month'] }}', // 1-12
        day: '{{ $params['day'] }}', // 1-31
        hour: '{{ $params['hour'] }}', // 24 hour format 0-23
        minute: '{{ $params['min'] }}', // 0-59
        second: '{{ $params['sec'] }}', // 0-59s
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
@endpush


@endsection
