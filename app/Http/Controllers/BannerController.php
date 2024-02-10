<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use Brian2694\Toastr\Facades\Toastr;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = banner::find(1);
        return view('backend.banner.index',compact('data'));
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
        $insert= banner::find(1)->update($request->except('_token','image'));

        $file= $request->file('image');

        if($file)
        {
            $pathImage = banner::find(1);

            $path = public_path().'/Backend/settings/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }

        }

        if($file)
        {
            $imageName=rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/Backend/settings/',$imageName);

            banner::where('id',1)->update(['image'=>$imageName]);
        }

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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
