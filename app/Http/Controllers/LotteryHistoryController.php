<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Models\game_setup;
use App\Traits\ViewDirective;
use App\Traits\Date;
use DataTables;

class LotteryHistoryController extends Controller
{
    use Date;
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->path = 'backend.lottery_info';
    }
    public function index(Request $request)
    {
        $this->sl = 0;
        if ($request->ajax()) {
            $game = game_setup::where('status',1)->first();
            $data = GameLedger::where('game_id',$game->id)->orderBy('date','DESC')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('sl',function($row){
                        return $this->sl = $this->sl +1;
                    })
                    ->addColumn('date_time',function($row){
                        return Date::DbtoOriginal('-',$row->date).' <br> '.Date::twelveHrTime($row->time);
                    })
                    ->addColumn('invoice_no',function($row){
                        return $row->invoice_no;
                    })
                    ->addColumn('game_name',function($row){
                        return $row->game_name;
                    })
                    ->addColumn('slot',function($row){
                        return $row->slot;
                    })
                    ->addColumn('total_amount',function($row){
                        return $row->total_amount;
                    })
                    ->addColumn('discount',function($row){
                        return $row->discount;
                    })
                    ->addColumn('bet_amount',function($row){
                        return $row->bet_amount;
                    })
                    ->addColumn('action', function($row){
                        return '<a target="_blank" class="btn btn-sm btn-info" href="'.route('lottery_info.show_report',$row->id).'"><i class="fa fa-eye"></i> View Report</a>';
                    })
                    ->rawColumns(['action','sl','date_time','invoice_no','game_name','slot','total_amount','discount','bet_amount'])
                    ->make(true);
        }
        return view('backend.lottery_info.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
