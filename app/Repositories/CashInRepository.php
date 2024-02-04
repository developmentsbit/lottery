<?php
namespace App\Repositories;

use App\Interfaces\CashInInterface;
use App\Models\CustomerTransaction;
use App\Models\PaymentMethod;
use App\Traits\ViewDirective;
use App\Models\Member;
use DataTables;
use Auth;

class CashInRepository implements CashInInterface {
    protected $path,$sl;
    use ViewDirective;
    public function __construct()
    {
        $this->path = 'backend.cash_in';
    }
    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = CustomerTransaction::where('transaction_type',1)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('method',function($row){
                $method = PaymentMethod::find($row->payment_type)->first();
                if(config('app.locale') == 'en')
                {
                    return $method->method_name ?: $method->method_name_bn;
                }
                else
                {
                    return $method->method_name_bn ?: $method->method_name;
                }
            })
            ->addColumn('member',function($row){
                $member = Member::where('member_id',$row->member_id)->first();
                return $member->first_name.' '.$member->last_name;
            })
            ->addColumn('status',function($row){
                if($row->status == 1)
                {
                    return '<span class="badge bg-success">Approved</span>';
                }
                else{
                    return '<a href=
                    "'.route('cash_in_request.status',$row->id).'" class="btn btn-sm btn-info">Approve</a>';
                }
            })
            ->addColumn('action', function($row){
                    if($row->status == 1)
                    {
                        return '';
                    }
                    if(Auth::user()->can('Cash In Request edit'))
                    {
                        $edit_btn = '<a class="dropdown-item" href="'.route('cash_in_request.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                    }
                    else
                    {
                        $edit_btn ='';
                    }

                    if(Auth::user()->can('Cash In Request destroy'))
                    {
                        $destroy_btn = '<form action="'.route('cash_in_request.destroy',$row->id).'" id="deleteForm" method="post">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button onclick="return Sure()" id="" type="submit" class="text-danger dropdown-item" href="#"><i class="fa fa-trash"></i> Reject</button>
                        </form>';
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
                        <a class="d-none dropdown-item" href="'.route('role.show',$row->id).'"><i class="fa fa-eye"></i> '.__('common.show').'</a>
                        '.$destroy_btn.'
                    </div>
                </div>';

                    return $btn;
            })
            ->rawColumns(['action','method','sl','status','member'])
            ->make(true);
        }
        return $this->view($this->path,'index');
    }

    public function create()
    {

    }

    public function store($data){

    }

    public function show($id){

    }

    public function properties($id){

    }

    public function edit($id){

    }

    public function update($data, $id){

    }

    public function destroy($id){

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
