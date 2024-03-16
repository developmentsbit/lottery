<?php
namespace App\Repositories;

use App\Interfaces\CountrySetupInterface;
use App\Traits\ViewDirective;
use DataTables;
use App\Models\Country;
use Auth;

class CountrySetupRepository implements CountrySetupInterface {
    protected $path,$sl;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.country';
    }


    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = Country::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('action', function($row){
                    if(Auth::user()->can('Country Setup edit'))
                    {
                        $edit_btn = '<a class="dropdown-item" href="'.route('country_setup.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                    }
                    else
                    {
                        $edit_btn ='';
                    }

                    if(Auth::user()->can('Country Setup destroy'))
                    {
                        $destroy_btn ='<form action="'.route('country_setup.destroy',$row->id).'" id="deleteForm" method="post">
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
            ->rawColumns(['action','role_name','sl'])
            ->make(true);

        }
        return $this->view($this->path,'index');
    }

    public function create()
    {
        return $this->view($this->path,'create');
    }

    public function store($request)
    {
        $data = array(
            'name' => $request->name,
            'dollar_rate' => $request->dollar_rate,
            'currency_name' => $request->currency_name,
        );
        try {
            Country::create($data);
            toastr()->success('Country Created Successfully',__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Country Created Unsuccessfully',__('common.error'));
            return redirect()->back();
        }


    }

    public function show($id){

    }

    public function properties($id){

    }

    public function edit($id)
    {
        $param['data'] = Country::find($id);
        return $this->view($this->path,'edit',$param);
    }

    public function update($request, $id)
    {
        $data = array(
            'name' => $request->name,
            'dollar_rate' => $request->dollar_rate,
            'currency_name' => $request->currency_name,
        );

        try
        {
            Country::where('id',$id)->update($data);
            toastr()->success('Country Updated Successfully',__('common.success'));
            return redirect()->back();
        }catch(\Throwable $th)
        {
            toastr()->error('Country Updated Unsuccessfully',__('common.error'));
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            Country::find($id)->delete();
            toastr()->success('Country Delete Successfully',__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error('Country Delete Unsuccessfully',__('common.error'));
            return redirect()->back();
        }
    }

    public function trash_list($datatable){

    }

    public function restore($id){

    }

    public function delete($id){

    }

    public function print(){

    }

}
