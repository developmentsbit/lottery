<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\CashInInterface;
use App\Models\CustomerTransaction;
use App\Http\Requests\CashInRequest;

class CashInRequestController extends Controller
{
    protected $interface;
    public function __construct(CashInInterface $interface)
    {
        $this->interface = $interface;
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
    public function store(CashInRequest $request)
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
        return $this->interface->destroy($id);
    }

    public function status($id)
    {
        $check = CustomerTransaction::find($id);
        if($check->status == 0)
        {
            $check->update([
                'status' => 1,
            ]);
        }
        toastr()->success('The Request Is Accepted','success');
        return redirect()->back();
    }

    public function trash(Request $request)
    {
        $datatable = '';
        if($request->ajax())
        {
            $datatable = true;
        }
        return $this->interface->trash_list($datatable);
    }

    public function restore($id)
    {
        return $this->interface->restore($id);
    }
}
