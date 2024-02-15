<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use Auth;
use DataTables;
use App\Models\game_setup;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Traits\Date;

class LotteryNumbersController extends Controller
{
    protected $path;
    use ViewDirective, Date;
    public function __construct()
    {
        $this->path = 'backend.lottery_numbers';
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $params['game'] = game_setup::where('status',1)->first();
        if ($request->ajax()) {
            $game = game_setup::where('status',1)->first();
            $data = GameEntry::leftjoin('game_ledgers','game_ledgers.invoice_no','game_entries.invoice_no')
            ->leftjoin('members','members.member_id','game_ledgers.member_id')
            ->where('game_ledgers.game_id',$game->id)
            ->select('game_entries.*','members.first_name','members.last_name','game_ledgers.date','game_ledgers.time')
            ->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('member',function($row){
                    return $row->first_name.' '.$row->last_name;
                })
                ->addColumn('date_time',function($row){
                    return Date::DbtoOriginal('-',$row->date).' <br> '.Date::twelveHrTime($row->time);
                })

                ->rawColumns(['member','date_time'])
                ->make(true);
        }
        return $this->view($this->path,'active_numbers',$params);
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
