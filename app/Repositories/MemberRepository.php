<?php
namespace App\Repositories;
use App\Interfaces\MemberInterface;
use Hash;
use App\Models\Member;
use App\Traits\Idgenerator;
use RealRashid\SweetAlert\Facades\Alert;

class MemberRepository implements MemberInterface{
    use Idgenerator;
    public function index($datatable)
    {

    }

    public function create()
    {

    }

    public function store($request)
    {

        $data = array(
            'member_id' => Idgenerator::AutoCode('members','member_id','M-','8'),
            'mobile_no' => $request->mobile_no,
            'password' => Hash::make($request->password),
            'raw_text_pass' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'city' => $request->city,
            'country' => $request->country,
            'email' => $request->email,
            'nationality' => $request->nationality,
            'profile' => '0',
        );

         if(isset($request->referral_no))
        {
            $data['referral_no'] = $request->referral_no;
        }

        // try {
            Member::create($data);
            Alert::success(__('common.success'), __('frontend.registration_success'));
            return redirect()->back();
        // } catch (\Throwable $th) {
        //     Alert::warning(__('common.error'), __('frontend.something_went_wrong'));
        //     return redirect()->back();
        // }
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
