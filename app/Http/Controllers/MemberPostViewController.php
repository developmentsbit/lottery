<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ViewDirective;
use Auth;
use App\Traits\Member;
use App\Models\Member as MemberModel;
use App\Models\Post;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class MemberPostViewController extends Controller
{
    protected $path;
    use ViewDirective,Member;
    public function __construct()
    {
        $this->path = 'backend.member_post';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $param['data'] = Post::all();

        return $this->view($this->path,'index',$param);
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
        // Post::find($id)->delete();
        
        // Alert::success('Success', 'This Member Post Removed');
        
        // return redirect()->back();

        Post::find($id)->delete();

        Alert::success('Success', 'This Member Post Removed');

        return redirect()->back();
    }

    public function status($id)
    {
        $check = Post::find($id);
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

        return redirect()->back();
    }
}
