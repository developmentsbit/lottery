@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">

        <div class="card">
            <div class="card-body">
                <form method="GET" action="{{ route('all_lottery.index') }}">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <label>Select Setup Games</label>
                        <select class="form-select form-select-sm " name="game_setup" id="game_setup" required>
                            <option value="">Select One</option>
                            @foreach ($params['games'] as $g)
                            <option
                            @if(isset($params['setup_id']))

                            @if($params['setup_id'] == $g->id)
                            selected
                            @endif

                            @endif

                            value="{{ $g->id }}">{{ $g->game_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <label>Select Games</label>
                        <select class="form-select form-select-sm" name="game" id="game" required>
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
                    <div class="col-lg-4 col-md-4 col-6">
                        <label>Number</label>
                        <input type="number" name="number" id="number" required class="form-control form-control-sm">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <br>
                        <button class="btn btn-sm btn-info"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        @php
            use App\Traits\Date;
        @endphp
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Game</th>
                                        <th>Lottery Numbers</th>
                                        <th>Direct Amount</th>
                                        <th>Rumble Amount</th>
                                        <th>Member</th>
                                        <th>Invoice No</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($params['data']))
                                @if(count($params['data']) > 0)
                                @foreach ($params['data'] as $v)
                                    <tr>
                                        <td>
                                            {{ $v->game_name }}
                                        </td>
                                        <td>{{ $v->lottery_number }}</td>
                                        <td>{{ $v->direct_amount }}</td>
                                        <td>{{ $v->rumble_amount }}</td>
                                        <td>{{ $v->first_name.' '.$v->last_name }}</td>
                                        <td>{{ $v->invoice_no }}</td>
                                        <td>{{ Date::DbtoOriginal('-',$v->date).'||'.Date::twelveHrTime($v->time); }}</td>
                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="text-center">No Data Found !</td>
                                </tr>
                                @endif
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>


@endsection
