<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Traits\ViewDirective;
use DataTables;

class LotteryHistoryController extends Controller
{
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
            $data = GameLedger::select('*');
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
                        return '<div class="btn-group">
                        <a href="'.route('lottery_info.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('lottery_info.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
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
