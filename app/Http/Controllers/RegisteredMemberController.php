<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Member as MemberModel;
use App\Traits\Member;
use App\Traits\ViewDirective;
use Auth;

class RegisteredMemberController extends Controller
{
    protected $path;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.registered_member';
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = MemberModel::orderBy('member_id','ASC')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('name',function($row){
                return $row->first_name.' '.$row->last_name;
            })
            ->addColumn('profile',function($row){
                if($row->profile != 0 && $row->profile != NULL)
                {
                    return '<img src="'.asset('MemberProfile').'/'.$row->profile.'" class="img-fluid" style="height : 40px;width:40px;border-radius : 100%;">';
                }
                else
                {
                    return '-';
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Registered Member status'))
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
                    <input class="form-check-input" type="checkbox" onclick="return memberStatus('.$row->id.')" id="memberStatus-'.$row->id.'" '.$status.'>
                </div>';
                }
                else
                {
                    return '';
                }
            })
            // ->addColumn('action', function($row){

            //     $d_none = '';
            //     if($row->type == 1)
            //     {
            //         $d_none = 'd-none';
            //     }

            //     if(Auth::user()->can('Menu edit'))
            //     {
            //         $edit_btn = ' <a class="dropdown-item" href="'.route('menu.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
            //     }
            //     else
            //     {
            //         $edit_btn ='';
            //     }

            //     if(Auth::user()->can('Menu show'))
            //     {
            //         $show_btn = '<a  class=" '.$d_none.' dropdown-item" href="'.route('menu.show',$row->id).'"><i class="fa fa-eye"></i> '.__('common.show').'</a>';
            //     }
            //     else
            //     {
            //         $show_btn ='';
            //     }
            //     if(Auth::user()->can('Menu properties'))
            //     {
            //         $prop_btn = '<a class="dropdown-item" href="'.route('menu.properties',$row->id).'"><i class="fa fa-bars"></i> '.__('common.properties').'</a>';
            //     }
            //     else
            //     {
            //         $prop_btn ='';
            //     }
            //     if(Auth::user()->can('Menu destroy'))
            //     {
            //         $destroy_btn = '<form action="'.route('menu.destroy',$row->id).'" id="deleteForm" method="post">
            //         '.csrf_field().'
            //         '.method_field('DELETE').'
            //         <button onclick="return Sure()" id="" type="submit" class="text-danger dropdown-item" href="#"><i class="fa fa-trash"></i> '.__('common.destroy').'</button>
            //         </form>';
            //     }
            //     else
            //     {
            //         $destroy_btn ='';
            //     }
            //     $btn = '<div class="btn-group">
            //     <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-haspopup="true"
            //         aria-expanded="false">
            //         '.__('common.actions').'
            //     </button>
            //     <div class="dropdown-menu">
            //             '.$edit_btn.'
            //             '.$show_btn.'
            //             '.$prop_btn.'
            //             '.$destroy_btn.'

            //         </div>
            //     </div>';

            //         return $btn;
            // })
            ->rawColumns(['status','name','profile'])
            ->make(true);

        }
        return $this->view($this->path,'index');
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

    public function status(Request $request)
    {
        $check = MemberModel::find($request->id);
        if($check->status == 1)
        {
            $check->update([
                'status' => 0,
            ]);
        }
        else
        {
            $check->update([
                'status' => 1,
            ]);
        }
        return true;
    }
}
