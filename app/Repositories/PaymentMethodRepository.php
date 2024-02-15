<?php
namespace App\Repositories;

use App\Interfaces\PaymentMethodInterface;
use App\Traits\ViewDirective;
use App\Models\PaymentMethod;
use DataTables;
use Auth;

class PaymentMethodRepository implements PaymentMethodInterface{

    protected $path;
    use ViewDirective;
    protected $sl;
    public function __construct()
    {
        $this->path = 'backend.payment_method';
    }

    public function index($datatable)
    {
        if($datatable == 1)
        {
            $data = PaymentMethod::all();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('method_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->method_name ?: $row->method_name_bn;
                }
                else
                {
                    return $row->method_name_bn ?: $row->method_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Payment Method status'))
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
                    <input class="form-check-input" type="checkbox" onclick="return PayMethodStatus('.$row->id.')" id="PayMethodStatus-'.$row->id.'" '.$status.'>
                </div>';
                }
                else
                {
                    return '';
                }
            })
            ->addColumn('action', function($row){

                    if(Auth::user()->can('Payment Method edit'))
                    {
                        $edit_btn = '<a class="dropdown-item" href="'.route('payment_method.edit',$row->id).'"><i class="fa fa-edit"></i> '.__('common.edit').'</a>';
                    }
                    else
                    {
                        $edit_btn ='';
                    }

                    if(Auth::user()->can('Payment Method destroy'))
                    {
                        $destroy_btn = '<form action="'.route('payment_method.destroy',$row->id).'" id="deleteForm" method="post">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button onclick="return Sure()" id="" type="submit" class="text-danger dropdown-item" href="#"><i class="fa fa-trash"></i> '.__('common.destroy').'</button>
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
            ->rawColumns(['action','method_name','sl','status'])
            ->make(true);

        }
        return view($this->path.'.index');
    }

    public function create()
    {
        return $this->view($this->path,'create');
    }

    public function store($request)
    {
        $data = array(
            'method_name' => $request->method_name,
            'method_name_bn' => $request->method_name_bn,
            'vat' => $request->vat,
            'dollar_rate' => $request->dollar_rate,
            'status' => 1,
            'number' => $request->number,
        );

        try {
            PaymentMethod::create($data);
            toastr()->success( __('payment_method.create_message'),__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error( __('payment_method.create_error'),__('common.error'));
            return redirect()->back();
        }
    }

    public function show($id){

    }

    public function properties($id){

    }

    public function edit($id)
    {
        $param = [];
        $param['data'] = PaymentMethod::find($id);
        return $this->view($this->path,'edit',$param);
    }

    public function update($request, $id)
    {
        $data = array(
            'method_name' => $request->method_name,
            'method_name_bn' => $request->method_name_bn,
            'vat' => $request->vat,
            'dollar_rate' => $request->dollar_rate,
            'number' => $request->number,
        );

        try {
            PaymentMethod::where('id',$id)->update($data);
            toastr()->success( __('payment_method.update_message'),__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error( __('payment_method.update_error'),__('common.error'));
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            PaymentMethod::where('id',$id)->delete($id);
            toastr()->success( __('payment_method.delete_message'),__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error( __('payment_method.delete_error'),__('common.error'));
            return redirect()->back();
        }
    }

    public function trash_list($datatable)
    {
        if($datatable == 1)
        {
            $data = PaymentMethod::onlyTrashed()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('sl',function($row){
                return $this->sl = $this->sl +1;
            })
            ->addColumn('method_name',function($row){
                if(config('app.locale') == 'en')
                {
                    return $row->method_name ?: $row->method_name_bn;
                }
                else
                {
                    return $row->method_name_bn ?: $row->method_name;
                }
            })
            ->addColumn('status',function($row){
                if(Auth::user()->can('Payment Method status'))
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
                    <input class="form-check-input" type="checkbox" onclick="return PayMethodStatus('.$row->id.')" id="PayMethodStatus-'.$row->id.'" '.$status.'>
                </div>';
                }
                else
                {
                    return '';
                }
            })
            ->addColumn('action', function($row){

                    if(Auth::user()->can('Payment Method restore'))
                    {
                        $edit_btn = '<a class="dropdown-item" href="'.route('payment_method.restore',$row->id).'"><i class="fa fa-arrow-left"></i> '.__('common.restore').'</a>';
                    }
                    else
                    {
                        $edit_btn ='';
                    }

                    if(Auth::user()->can('Payment Method destroy'))
                    {
                        $destroy_btn = '<a onclick="return Sure();" class="dropdown-item text-danger" href="'.route('payment_method.delete',$row->id).'"><i class="fa fa-trash"></i> '.__('common.delete').'</a>';
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
            ->rawColumns(['action','method_name','sl','status'])
            ->make(true);

        }
        return view($this->path.'.trash_list');
    }

    public function restore($id)
    {
        try {
            PaymentMethod::withTrashed()->where('id',$id)->restore();
            toastr()->success( __('payment_method.restore_message'),__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error( __('payment_method.restore_error'),__('common.error'));
            return redirect()->back();
        }
    }

    public function delete($id){
        try {
            PaymentMethod::withTrashed()->where('id',$id)->forceDelete();
            toastr()->success( __('payment_method.delete_message'),__('common.success'));
            return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->error( __('payment_method.delete_error'),__('common.error'));
            return redirect()->back();
        }
    }

    public function print(){

    }

    public function status($id)
    {
        $check = PaymentMethod::withTrashed()->where('id',$id)->first();
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
