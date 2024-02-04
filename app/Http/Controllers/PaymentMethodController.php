<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PaymentMethodInterface;
use App\Http\Requests\PaymentMethod;

class PaymentMethodController extends Controller
{
    protected $interface;
    public function __construct(PaymentMethodInterface $interface)
    {
        $this->interface = $interface;
        $this->middleware(['permission:Payment Method index'])->only(['index']);
        $this->middleware(['permission:Payment Method create'])->only(['create']);
        $this->middleware(['permission:Payment Method show'])->only(['show']);
        $this->middleware(['permission:Payment Method edit'])->only(['edit']);
        $this->middleware(['permission:Payment Method destroy'])->only(['destroy']);
        $this->middleware(['permission:Payment Method trash'])->only(['trash_list']);
        $this->middleware(['permission:Payment Method restore'])->only(['restore']);
        $this->middleware(['permission:Payment Method properties'])->only(['properties']);
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
    public function store(PaymentMethod $request)
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
    public function update(PaymentMethod $request, string $id)
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

    public function status(Request $request)
    {
        return $this->interface->status($request->id);
    }

    public function trash_list(Request $request)
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

    public function delete($id)
    {
        return $this->interface->delete($id);
    }
}
