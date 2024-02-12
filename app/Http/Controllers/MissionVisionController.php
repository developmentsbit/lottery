<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\missionvision;
use DataTables;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class MissionVisionController extends Controller
{
    protected $sl;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->sl = 0;
        if ($request->ajax()) {
            $data = missionvision::select('*');
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
                    ->addColumn('status',function($v){
                        if($v->status == 1)
                        {
                            $checked = 'checked';
                        }
                        else
                        {
                            $checked = '';
                        }

                        return '<div class="form-check form-switch">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="missionvisionStatus-'.$v->id.'" '.$checked.' onclick="return ChangeMissionVisionStatus('.$v->id.')">
                            </label>
                        </div>';
                        })
                    ->addColumn('image', function ($row) { 
                        $url=asset("/Backend/img/mission_vision/$row->image");
                        return ' <a href="'.$url.'" download="'.$row->title.'" class="btn btn-success btn-sm">Download</a>';
                    })
                    ->addColumn('action', function($row){
                        return '<div class="btn-group">
                        <a href="'.route('mission_vision.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('mission_vision.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
                    })
                    ->rawColumns(['action','sl','title','title_bn','image','status'])
                    ->make(true);
        }
        return view('backend.mission_vision.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mission_vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(
            'title'=>$request->title,
            'title_bn'=>$request->title_bn,
            'details'=>$request->details,
            'details_bn'=>$request->details_bn,
            'status'=>$request->status,
        );

        $file = $request->file('image');

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/Backend/img/mission_vision/',$imageName);

            $data['image'] = $imageName;

        }

        $insert = missionvision::create($data);

        if($insert)
        {
            Toastr::success('Data Insert Success', 'success');
            return redirect(route('mission_vision.index'));
        }
        else
        {
            Alert::error('Congrats', 'Data Insert Error');
            return redirect(route('mission_vision.index'));
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
        $data = missionvision::where('id',$id)->first();

        return view('backend.mission_vision.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file = $request->file('image');

        if($file)
        {
            $pathImage = missionvision::find($id);

            $path = public_path().'/Backend/img/mission_vision/'.$pathImage->image;

            if(file_exists($path))
            {
                unlink($path);
            }

        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();

            $file->move(public_path().'/Backend/img/mission_vision/',$imageName);

            missionvision::where('id',$id)->update(['image'=>$imageName]);

        }

        $update = missionvision::find($id)->update([
            'title'=>$request->title,
            'title_bn'=>$request->title_bn,
            'details'=>$request->details,
            'details_bn'=>$request->details_bn,
            'status'=>$request->status,
        ]);

        if($update)
        {
            Toastr::success('Data Update Success', 'success');
            return redirect(route('mission_vision.index'));
        }
        else
        {
            Toastr::error('Data Update Error', 'success');
            return redirect(route('mission_vision.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        missionvision::find($id)->delete();

        Toastr::success('Data Temporarily Deleted', 'success');
        return redirect(route('mission_vision.index'));
    }

    public function restore($id){
        missionvision::where('id',$id)->withTrashed()->restore();

        Toastr::success('Deleted Data Restore', 'success');
        return redirect(route('mission_vision.index'));
    }
    
    public function deletedListIndex($id)
    {
        $pathImage= missionvision::where('id',$id)->withTrashed()->select('image')->first();
        
        $path=public_path().'Backend/img/mission_vision/'.$pathImage->image;
        // return $path;
        if(file_exists($path))
        {
            unlink($path);
        }

        missionvision::where('id',$id)->withTrashed()->forceDelete();

        Toastr::success('Data Permanently Deleted', 'success');
        return redirect(route('mission_vision.index'));
    }

    public function ChangedMissionVisionStatus($id)
    {
        $check = missionvision::find($id);
        
        if ($check->status == 1) 
        {
            missionvision::find($id)->update(['status'=>0]);
        }
        else 
        {
            missionvision::find($id)->update(['status'=>1]);
        }

        return 1;
    }
}
