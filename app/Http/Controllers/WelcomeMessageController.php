<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\welcomemessage;
use Brian2694\Toastr\Facades\Toastr;

class WelcomeMessageController extends Controller
{
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
        $data = welcomemessage::find(1);
        return view('backend.welcome_message.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert= welcomemessage::find(1)->update($request->except('_token'));

        if($insert)
        {
            Toastr::success('Data Update Success', 'success');
            return redirect()->back();
        }
        else
        {
            Alert::error('Congrats', 'Data Update Error');
            return redirect()->back();
        }
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
