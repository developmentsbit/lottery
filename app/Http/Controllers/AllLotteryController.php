<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game_setup;
use App\Models\GameLedger;
use App\Models\GameEntry;
use App\Traits\ViewDirective;

class AllLotteryController extends Controller
{
    protected $path;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.all_lottery';
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(isset($request->game_setup) && isset($request->game))
        {
            $setup_id = $request->game_setup;
            $game_id = $request->game;

            $param['data'] = GameEntry::leftjoin('game_ledgers','game_ledgers.invoice_no','game_entries.invoice_no')
            ->leftjoin('members','members.member_id','game_ledgers.member_id')
            ->where('game_ledgers.game_id',$setup_id)
            ->where('game_ledgers.game_name',$game_id)
            ->select('game_entries.*','members.first_name','members.last_name','game_ledgers.date','game_ledgers.time')
            ->get();

            $param['setup_id'] = $setup_id;
            $param['game_id'] = $game_id;
        }

        $param['games'] = game_setup::where('status',1)->get();
        return $this->view($this->path,'index',$param);
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
