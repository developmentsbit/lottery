<?php
namespace App\Repositories;

use App\Interfaces\AgentInterface;
use App\Models\Country;
use App\Models\Agent;
use DataTables;
use App\Traits\ViewDirective;
use App\Traits\Idgenerator;
use Auth;

class AgentRepository implements AgentInterface {
    protected $sl,$path;
    use ViewDirective,Idgenerator;
    public function __construct()
    {
        $this->path = 'backend.agent';
    }
    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = Agent::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('country',function($row){
                $country = Country::find($row->country_id);
                return $country->name;
            })
            ->addColumn('image',function($row){
                // $path = base_path().'/AgentImage/'.$row->image;

                return '<img src="'.asset('AgentImage/'.$row->image).'" class="img-fluid" style="height:60px;width:60px;border-radius:100%;">';
            })
            ->addColumn('action', function($row){
                    if(Auth::user()->can('Agent edit'))
                    {
                        $edit_btn = '<a class="dropdown-item" href="'.route('agent.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                    }
                    else
                    {
                        $edit_btn ='';
                    }

                    if(Auth::user()->can('Agent destroy'))
                    {
                        $destroy_btn ='<form action="'.route('agent.destroy',$row->id).'" id="deleteForm" method="post">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button onclick="return Sure()" id="" type="submit" class="text-danger dropdown-item" href="#"><i class="fa fa-trash"></i> '.__('common.destroy').'</button>';
                    }
                    else
                    {
                        $destroy_btn ='';
                    }
                    $btn = '<div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        '.__('common.actions').'
                    </button>
                    <div class="dropdown-menu">
                        '.$edit_btn.'
                        '.$destroy_btn.'
                        </form>
                    </div>
                </div>';

                    return $btn;
            })
            ->rawColumns(['action','country','sl','image'])
            ->make(true);

        }

        return $this->view($this->path,'index');
    }

    public function create()
    {
        $param['country'] = Country::where('status',1)->get();
        return $this->view($this->path,'create',$param);
    }

    public function store($request)
    {
        $data = array(
            'agent_id' => Idgenerator::AutoCode('agents','agent_id','AG-','8'),
            'country_id' => $request->country_id,
            'name' => $request->name,
            'phone' =>$request->phone,
            'email' => $request->email,
        );

        $file = $request->file('image');

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/AgentImage/',$imageName);
            $data['image'] = $imageName;
        }
        else
        {
            $data['image'] = '0';
        }

        try {
            Agent::create($data);
            toastr()->success('Agent Created Successfully','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Created Unsuccessfully','Success');
            return redirect()->back();
        }
    }

    public function show($id){

    }

    public function properties($id){

    }

    public function edit($id)
    {
        $param['data'] = Agent::find($id);
        $param['country'] = Country::all();

        // return $param['data']->id;
        return $this->view($this->path,'edit',$param);
    }

    public function update($request, $id)
    {
        $data = array(
            'country_id' => $request->country_id,
            'name' => $request->name,
            'phone' =>$request->phone,
            'email' => $request->email,
        );

        $file = $request->file('image');

        if($file)
        {
            $pathImage = Agent::find($id);
            $path = public_path().'/AgentImage/'.$pathImage->image;
            if(file_exists($path))
            {
                unlink($path);
            }
        }

        if($file)
        {
            $imageName = rand().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/AgentImage/',$imageName);
            $data['image'] = $imageName;
        }
        else
        {
            $data['image'] = '0';
        }

        try {
            Agent::where('id',$id)->update($data);
            toastr()->success('Agent Updated Successfully','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Updated Unsuccessfully','Error');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            Agent::where('id',$id)->delete();
            toastr()->success('Agent Delete Successfully','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Delete Unsuccessfully','Error');
            return redirect()->back();
        }
    }

    public function trash_list($datatable)
    {
        if($datatable == 1)
        {
            $data = Agent::onlyTrashed()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('country',function($row){
                $country = Country::find($row->country_id);
                return $country->name;
            })
            ->addColumn('action', function($row){
                return '<a href="'.route('agent.restore',$row->id).'" class="btn btn-sm btn-warning">Restore</a>
                <a onclick="return Sure()" href="'.route('agent.delete',$row->id).'" class="btn btn-sm btn-danger">Delete</a>';
            })
            ->rawColumns(['action','country','sl'])
            ->make(true);

        }

        return $this->view($this->path,'trash_list');
    }

    public function restore($id)
    {
        try {
            $pathImage = Agent::withTrashed()->where('id',$id)->first();
            $path = public_path().'/AgentImage/'.$pathImage->image;
            if(file_exists($path))
            {
                unlink($path);
            }
            Agent::withTrashed()->where('id',$id)->restore();
            toastr()->success('Agent Delete Successfully','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Delete Unsuccessfully','Error');
            return redirect()->back();
        }
    }

    public function delete($id){
        try {
            $pathImage = Agent::withTrashed()->where('id',$id)->first();
            $path = public_path().'/AgentImage/'.$pathImage->image;
            if(file_exists($path))
            {
                unlink($path);
            }
            Agent::withTrashed()->where('id',$id)->forceDelete();
            toastr()->success('Agent Restore Successfully','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Restore Unsuccessfully','Error');
            return redirect()->back();
        }
    }

    public function print(){

    }

}
