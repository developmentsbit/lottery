<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CountrySetupInterface;
use App\Http\Requests\CountrySetupRequest;

class CountrySetupController extends Controller
{
    protected $interface;
    public function __construct(CountrySetupInterface $interface)
    {
        $this->interface = $interface;
        $this->middleware(['permission:Country Setup index'])->only(['index']);
        $this->middleware(['permission:Country Setup create'])->only(['create']);
        $this->middleware(['permission:Country Setup show'])->only(['show']);
        $this->middleware(['permission:Country Setup edit'])->only(['edit']);
        $this->middleware(['permission:Country Setup destroy'])->only(['destroy']);
        $this->middleware(['permission:Country Setup trash'])->only(['trash_list']);
        $this->middleware(['permission:Country Setup restore'])->only(['restore']);
        $this->middleware(['permission:Country Setup properties'])->only(['properties']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datatable = '';
        if($request->ajax())
        {
            $datatable = true;
        }

        return $this->interface->index($datatable);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->interface->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountrySetupRequest $request)
    {
        return $this->interface->store($request);
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
        return $this->interface->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountrySetupRequest $request, string $id)
    {
        return $this->interface->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->interface->destroy($id);
    }
}
