<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('backend.users.index')->with([
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=DB::table('users')->find($id);
        return view('backend.users.show',[
            'user' => $user
        ]);
    }
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('name')==null){
                return redirect()->back();
        }
        else
        {
            $data = $request->only(['name','email','password']);
            DB::table('users')->insert([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password']
            ]);
            return redirect()->route('backend.users.index');
        }
    }

    public function edit($id)
    {
        $user = DB::table('users')->find($id);
        return view('backend.users.edit')->with([
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->get('title')==null){
            return redirect()->back();
    }
    else
    {
        $data = $request->only(['name','email','password']);
        DB::table('users')->where('id',$id)
            ->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
        return redirect()->route('backend.users.index');
    }
    }   
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
