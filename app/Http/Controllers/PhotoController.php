<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo_info;
use DataTables;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class PhotoController extends Controller
{
    protected $sl;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->sl = 0;
        if ($request->ajax()) {
            $data = photo_info::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('sl',function($row){
                        return $this->sl = $this->sl +1;
                    })
                    ->addColumn('title',function($row){
                        if(config('app.locale') == 'en')
                        {
                            return $row->title ?: $row->title_bn;
                        }
                        else
                        {
                            return $row->title_bn ?: $row->title;
                        }
                    })
                    ->addColumn('status',function($row){
                        if(Auth::user()->can('Menu status'))
                        {
                            if($row->status == 1)
                            {
                                $status = 'checked';
                            }
                            else
                            {
                                $status = '';
                            }
                            return '<div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" onclick="return ChangePhotoInfoStatus('.$row->id.')" id="PhotoInfoStatusChange-'.$row->id.'" '.$status.'>
                        </div>';
                        }
                        else
                        {
                            return '';
                        }
                    })
                    ->addColumn('image', function ($row) { 
                        $url=asset("/Backend/img/photo_info/$row->image");
                        return ' <a href="'.$url.'" download="'.$row->title.'" class="btn btn-success btn-sm">Download</a>';
                    })
                    ->addColumn('action', function($row){
                        return '<div class="btn-group">
                        <a href="'.route('photo_info.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('photo_info.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
                    })
                    ->rawColumns(['action','sl','title','title_bn','image','status'])
                    ->make(true);
        }
        return view('backend.photo_info.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.photo_info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'title'=>$request->title,
            'title_bn'=>$request->title_bn,
            'slider'=>$request->slider,
            'status'=>$request->status,
        );

        $file = $request->file('image');

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/Backend/img/photo_info/',$imageName);

            $data['image'] = $imageName;

        }

        $insert = photo_info::create($data);

        if($insert)
        {
            Toastr::success('Data Insert Success', 'success');
            return redirect(route('photo_info.index'));
        }
        else
        {
            Alert::error('Congrats', 'Data Insert Error');
            return redirect(route('photo_info.index'));
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
    public function destroy($id)
    {
        photo_info::find($id)->delete();

        Toastr::success('Data Temporarily Deleted', 'success');
        return redirect(route('photo_info.index'));
    }

    public function restore($id){
        photo_info::where('id',$id)->withTrashed()->restore();

        Toastr::success('Deleted Data Restore', 'success');
        return redirect(route('photo_info.index'));
    }
    
    public function deletedListIndex($id)
    {
        $pathImage= photo_info::where('id',$id)->withTrashed()->select('image')->first();
        
        $path=public_path().'Backend/img/photo_info/'.$pathImage->image;
        // return $path;
        if(file_exists($path))
        {
            unlink($path);
        }

        photo_info::where('id',$id)->withTrashed()->forceDelete();

        Toastr::success('Data Permanently Deleted', 'success');
        return redirect(route('photo_info.index'));
    }

    public function status($id)
    {
        $check = Menu::find($id);
        if($check->status == 1)
        {
            Menu::makeInactive($id);
        }
        else
        {
            Menu::makeActive($id);
        }

        ActivityLog::create([
            'activity' => 'change_status',
            'slug' => 'menu',
            'description_en' => 'Have Changed Status Of A Menu ',
            'description_bn' => 'একটি মেনুর স্ট্যাটাস চেন্জ করেছেন যার নাম ',
            'foreign_id' => $id,
        ]);

       return 1;
    }
}
