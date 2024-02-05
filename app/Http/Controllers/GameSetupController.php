<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\game_setup;
use DataTables;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class GameSetupController extends Controller
{
    protected $sl;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $this->sl = 0;
        if ($request->ajax()) {
            $data = game_setup::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('sl',function($row){
                        return $this->sl = $this->sl +1;
                    })
                    ->addColumn('game_title',function($row){
                        if(config('app.locale') == 'en')
                        {
                            return $row->game_title ?: $row->game_title_bn;
                        }
                        else
                        {
                            return $row->game_title_bn ?: $row->game_title;
                        }
                    })
                    ->addColumn('start_date',function($row){
                        return $row->start_date;
                    })
                    ->addColumn('end_date',function($row){
                        return $row->end_date;
                    })
                    ->addColumn('start_time',function($row){
                        return $row->start_time;
                    })
                    ->addColumn('end_time',function($row){
                        return $row->end_time;
                    })
                    ->addColumn('status',function($row){
                        return $row->status;
                    })
                    ->addColumn('action', function($row){
                        return '<div class="btn-group">
                        <a href="'.route('game_setup.edit',$row->id).'" class="btn btn-info">'.__('common.edit').'</a>
                        <form action="'.route('game_setup.destroy',$row->id).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger">'.__('common.delete').'</button>
                        </form></div>';
                    })
                    ->rawColumns(['action','sl','game_title','game_title_bn','start_date','end_date','start_time','end_time','status'])
                    ->make(true);
        }
        return view('backend.game_setup.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.game_setup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array(

            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'game_title'=>$request->game_title,
            'game_title_bn'=>$request->game_title_bn,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'status'=>$request->status,
            
        );

        $insert = game_setup::create($data);

        if($insert)
        {
            Toastr::success('Data Insert Success', 'success');
            return redirect(route('game_setup.create'));
        }
        else
        {
            Alert::error('Congrats', 'Data Insert Error');
            return redirect(route('game_setup.create'));
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
        $data = game_setup::find($id);

        return view('backend.game_setup.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = game_setup::find($id)->update([
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'game_title'=>$request->game_title,
            'game_title_bn'=>$request->game_title_bn,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'status'=>$request->status,
        ]);

        if($update)
        {
            Toastr::success('Data Update Success', 'success');
            return redirect(route('game_setup.index'));
        }
        else
        {
            Alert::error('Congrats', 'Data Update Error');
            return redirect(route('game_setup.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = game_setup::find($id)->delete();

        Toastr::success('Data Temporarily Deleted', 'success');
        return redirect(route('game_setup.index'));
    }

    public function restore($id){
        game_setup::where('id',$id)->withTrashed()->restore();

        Toastr::success('Deleted Data Restore', 'success');
        return redirect(route('game_setup.index'));
    }
    
    public function deletedListIndex($id)
    {
        game_setup::where('id',$id)->withTrashed()->forceDelete();

        Toastr::success('Data Permanently Deleted', 'success');
        return redirect(route('game_setup.index'));
    }
}
