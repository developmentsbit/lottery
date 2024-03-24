<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Country;
use App\Models\AgentAccounts;
use App\Traits\ViewDirective;
use DataTables;
use Auth;
use App\Http\Requests\AgentAccountsRequest;

class AgentAccountsController extends Controller
{
    protected $sl, $path;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.agent_accounts';
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = AgentAccounts::get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('agent',function($row){
                $agent = Agent::find($row->agent_id);
                if(isset($agent))
                {
                    return $agent->name;
                }
                else{
                    return '';
                }
            })
            ->addColumn('action', function($row){
                if(Auth::user()->can('Agent Accounts edit'))
                {
                    $edit_btn = '<a class="dropdown-item" href="'.route('agent_accounts.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                }
                else
                {
                    $edit_btn ='';
                }

                if(Auth::user()->can('Agent Accounts destroy'))
                {
                    $destroy_btn ='<form action="'.route('agent_accounts.destroy',$row->id).'" id="deleteForm" method="post">
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

            ->rawColumns(['action','country','sl'])
            ->make(true);

        }

        return $this->view($this->path,'index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $param['agent'] = Agent::all();
        $param['country'] = Country::all();

        return $this->view($this->path,'create',$param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgentAccountsRequest $request)
    {
        $data = array(
            'agent_id' => $request->agent_id,
            'number' => $request->number,
            'account_name' => $request->account_name,
        );

        try {
            AgentAccounts::create($data);
            toastr()->success('Agent Account Created','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Account Not Created','Error');
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
        $param['data'] = AgentAccounts::find($id);
        $param['country'] = Country::all();

        $param['agent_country'] = Agent::find($param['data']->agent_id);
        $param['agents'] = Agent::where('country_id',$param['agent_country']->country_id)->get();
        return $this->view($this->path,'edit',$param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgentAccountsRequest $request, string $id)
    {
        $data = array(
            'agent_id' => $request->agent_id,
            'number' => $request->number,
            'account_name' => $request->account_name,
        );

        try {
            AgentAccounts::find($id)->update($data);
            toastr()->success('Agent Account Updated','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Account Not Updated','Error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            AgentAccounts::find($id)->delete();
            toastr()->success('Agent Account Deleted','Success');
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Agent Account Not Deleted','Error');
            return redirect()->back();
        }
    }

    public function getAgentList(Request $request)
    {
        $agent = Agent::where('country_id',$request->country_id)->get();

        $output = '<option value="">Select One</option>';

        foreach($agent as $a)
        {
            $output.='<option value="'.$a->id.'">'.$a->name.'</option>';
        }

        return $output;
    }
}
