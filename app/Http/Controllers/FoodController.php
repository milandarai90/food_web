<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\Footnote\Node\Footnote;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $data['user'] = Auth::user();
        $data['foods'] = Food::all()->sortBy(function($query){
            return $query->name;
        });
        return view('admins.foods.index',$data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('admins.foods.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Food $food)
    {
        // dd($request->name);
        $food->name = $request->name;
        $food->description = $food->description;
        $food->save();
        return redirect('/food/create')->with('success', 'Food created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = Auth::user();
        $data['food'] = Food::find($id);
        return view('admins.foods.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food,$id)
    {
        // dd($request);
        $food = Food::find($id);
        $food->name = $request->name;
        $food->description = $request->description;
        $food->save();
        return redirect('food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
