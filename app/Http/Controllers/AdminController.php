<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['users'] = User::all();
        // $data['admin'] = User::all();
        return view('admins.users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        $data['restaurant'] = Restaurant::all();
        return view('admins.users.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {
        $this->validate($request, [
            'name' => 'required|max:200|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:16|same:confirm_password',
            'confirm_password' => 'required|min:4|max:16|same:password',
            'role' => 'required',
        ]);
        try{
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->restaurant_id = $request->restaurant;
        $user->save();
        // $role = Role::where('name', 'Admin')->first();
        // $user->attachRole($role->id);
        }catch(\Exception $e){
            echo 'Unable to save';
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Auth::user();
        $data['users'] = User::find($id);
        $data['restaurant'] = Restaurant::all();
        return view('admins.users.edit',$data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard(){
        $data['user'] = Auth::user();
        if(Auth::user()->role == 'Member'){
            abort(404);
        }
        return view('admins.dashboard.dashboard',$data);
    }
}
