<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery Report</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            width: 100%;
        }
        td, th{
            padding : 5px;
        }
        .page {
    width: 722px;
    margin: auto;
}
    </style>
</head>
<body>
    <div class="page">
        <table>
            <tr>
                <td colspan="4" style="text-align: center;">
                    <img src="{{ asset('Backend/settings') }}/{{ $settings->logo }}" alt="" style="height: 80px;">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span>Buying Date & Time: </span> : {{ $params['ledger']->invoice_no }}<br>
                    <span>Buying Date & Time: </span> : {{App\Traits\Date::DbtoOriginal('-',$params['ledger']->date)}} || {{App\Traits\Date::twelveHrTime($params['ledger']->time)}}<br>
                    <span>Member Name :</span> {{ $params['member']->first_name.' '.$params['member']->last_name }} <br>
                    <span>Member ID :</span> {{$params['ledger']->member_id}} <br>
                    <span>Game :</span> 
                    
                
                    @if($params['ledger']->game_name == "1st_prize_six_digit")
                        1st. Prize Six Digits
                    @elseif($params['ledger']->game_name == "3up")
                        3 Up
                    @elseif($params['ledger']->game_name == "2up")
                        2 Up
                    @elseif($params['ledger']->game_name == "2down")
                        2 Down
                    @elseif($params['ledger']->game_name == "1of3upsingledigit")
                        1 Of 3 Up Single Digit
                    @elseif($params['ledger']->game_name == "1of2upsingledigit")
                        1 Of 2 Up Single Digit
                    @elseif($params['ledger']->game_name == "1of2updowndigit")
                        1 Of 2 Down Single Digit
                    @elseif($params['ledger']->game_name == "3upgamettotal")
                        3 Up Game Total
                    @elseif($params['ledger']->game_name == "2upgamettotal")
                        2 Up Game Total
                    @elseif($params['ledger']->game_name == "2downgametotal")
                        2 Down Game Total
                    @endif
                    <br>
                </td>
                <td colspan="2">
                    <span>Print Date & Time :</span> {{ date('d M Y').' || '. date('h:i:s a') }}
                </td>
            </tr>
            <tr>
                <td>Sl</td>
                <td>Lottery Number</td>
                <td>Direct Amount</td>
                <td>Rumble Amount</td>
            </tr>
            @if(isset($params['game_entry']))
            @foreach ($params['game_entry'] as $v)
            <tr>
                <td>{{ $params['sl']++ }}</td>
                <td>
                    {{ $v->lottery_number }}
                </td>
                <td>
                    $ {{ $v->direct_amount }}
                </td>
                <td>
                    @if(isset($v->rumble_amount))
                     {{ '$'.$v->rumble_amount  }}
                     @endif
                </td>
            </tr>
            @endforeach
            @endif
            <tr>
                <td colspan="2" style="text-align: right;">Total Amount</td>
                <td colspan="2">{{ $params['ledger']->total_amount }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">Discount</td>
                <td colspan="2">{{ $params['ledger']->discount }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: right;">Bet Amount</td>
                <td colspan="2">{{ $params['ledger']->bet_amount }}</td>
            </tr>
        </table>
        <br>
        <center>
            <button onclick="window.print()">Print</button>
        </center>
    </div>
</body>
</html>
