<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use App\Models\Result;

class ResultController extends Controller
{
    protected $path;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.result';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->view($this->path,'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $actives = Result::all();

        foreach($actives as $a)
        {
            $a->update([
                'status' => 0,
            ]);
        }

        $data = array(
            'draw_date' => $request->draw_date,
            'first_prize' => $request->first_prize,
            'three_up' => $request->three_up,
            'two_up' => $request->two_up,
            'two_down' => $request->two_down,
            'next_draw_date' => $request->next_draw,
            'status' => 1,
        );

        Result::create($data);
        toastr()->success('Result Published','Success');
        return redirect()->back();
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
