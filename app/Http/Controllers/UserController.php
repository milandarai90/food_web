<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'password' => 'required|min:4|max:16|same:confirmpassword',
            'confirmpassword' => 'required|min:4|max:16|same:password',
        ]);
        dd($request);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dashboard')->with('success','Stored Successfully');
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
        //
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

    public function showLogin(){
        $data['user'] = Auth::user();
        return view('admins.dashboard.login',$data);
    }

    // public function authLogin(Request $request){
    //     $credentials = $request->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     // Authentication passed
    //     return redirect()->intended('/dashboard');
    // }
    // return back()->withErrors(['email' => 'Invalid credentials']);
    // }

    public function authLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Auth::user()->id);
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function userLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Auth::user()->id);
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function storeUser(Request $request,User $user){
        $this->validate($request, [
            'name' => 'required|max:200|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:16|same:confirmpassword',
            'confirmpassword' => 'required|min:4|max:16|same:password',
        ]);
        dd($request);
        // $user =  new User();
        // $password = 'admin';
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dashboard')->with('success','Stored Successfully');
    }

        // $user->name = $request->input('Bibek Thapa Magar');
        // $user->email = $request->input('bibek.thapa0521@gmail.com');
        // $user->password = Hash::make($request->input('admin'));

}
