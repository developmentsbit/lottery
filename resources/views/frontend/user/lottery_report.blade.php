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
                    <span>Game :</span> {{$params['ledger']->game_name}} <br>
                </td>
                <td colspan="2">
                    <span>Print Date & Time :</span> {{ date('d M Y').' || '. date('h:i:s a') }}
                </td>
            </tr>
            <tr>
                <td>Sl</td>
                <td>Lottery Number</td>
                <td>Direct Amount</td>
                <td>Rumble Amount Amount</td>
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
                    $ {{ $v->rumble_amount }}
                </td>
            </tr>
            @endforeach
            @endif
            <tr>
                <td colspan="3" style="text-align: right;">Total Amount</td>
                <td>{{ $params['ledger']->total_amount }}</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">Discount</td>
                <td>{{ $params['ledger']->discount }}</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right;">Bet Amount</td>
                <td>{{ $params['ledger']->bet_amount }}</td>
            </tr>
        </table>
        <br>
        <center>
            <button onclick="window.print()">Print</button>
        </center>
    </div>
</body>
</html>
