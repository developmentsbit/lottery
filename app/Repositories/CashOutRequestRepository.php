<?php
namespace App\Repositories;

use App\Interfaces\CashOutRequestInterface;
use App\Traits\ViewDirective;
use App\Models\CustomerTransaction;
use DataTables;
use Auth;
use App\Traits\Date;
use App\Models\PaymentMethod;
use App\Models\Member;
use App\Models\User;

class CashOutRequestRepository implements CashOutRequestInterface {
    protected $path,$sl;
    use ViewDirective,Date;
    public function __construct()
    {
        $this->path = 'backend.cash_out';
    }

    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = CustomerTransaction::where('transaction_type',4)->orderBy('date','DESC')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('date_time',function($row){
                return Date::DbtoOriginal('-',$row->date).' <br> '.Date::twelveHrTime($row->time);
            })
            ->addColumn('amount',function($row){
                return $row->withdraw - $row->vat;
            })
            ->addColumn('method',function($row){
                if(isset($row->payment_type))
                {
                    $method = PaymentMethod::find($row->payment_type)->first();
                    if(config('app.locale') == 'en')
                    {
                        return $method->method_name ?: $method->method_name_bn;
                    }
                    else
                    {
                        return $method->method_name_bn ?: $method->method_name;
                    }
                }
                elseif(isset($row->agent_id))
                {
                    $user = User::find($row->agent_id);

                    return $user->name;
                }
                else
                {
                    return '-';
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
                        <a class="d-none dropdown-item" href="'.route('role.show',$row->id).'"><i class="fa fa-eye"></i> '.__('common.show').'</a>
                        '.$destroy_btn.'
                    </div>
                </div>';

                    return $btn;
            })
            ->rawColumns(['action','method','sl','status','member','date_time','amount'])
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
        if($datatable == 1)
        {
            $data = CustomerTransaction::onlyTrashed()->where('transaction_type',4)->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('date_time',function($row){
                return Date::DbtoOriginal('-',$row->date).' <br> '.Date::twelveHrTime($row->time);
            })
            ->addColumn('amount',function($row){
                return $row->withdraw - $row->vat;
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

            ->addColumn('action', function($row){
                if(Auth::user()->can('Cash In Request restore'))
                {
                    return '<a onclick="return Sure()" href="'.route('cash_in_request.restore',$row->id).'" class="btn btn-info btn-sm">Restore</a>';
                }
            })
            ->rawColumns(['action','method','sl','status','member','date_time','amount'])
            ->make(true);
        }
        return $this->view($this->path,'trash_list');
    }

    public function restore($id){

    }

    public function delete($id){

    }

    public function print(){

    }

}
