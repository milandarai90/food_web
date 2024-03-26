<?php

namespace App\Http\Controllers;

use App\Models\FoodType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['types'] = FoodType::all()->sortBy(function($query){
            return $query->name;
        });
        return view('admins.foodtypes.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('admins.foodtypes.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FoodType $foodtype)
    {
        $foodtype->name = $request->name;
        $foodtype->description = $foodtype->description;
        $foodtype->save();
        return redirect('/foodtype/create')->with('success', 'Food Type set successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function show(FoodType $foodType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodType $foodType,$id)
    {
        $data['user'] = Auth::user();
        $data['foodtype'] = FoodType::find($id);
        return view('admins.foodtypes.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodType $foodType,$id)
    {
        $foodtype = FoodType::find($id);
        $foodtype->name = $request->name;
        $foodtype->description = $request->description;
        $foodtype->save();
        return redirect('foodtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodType $foodType)
    {
        //
    }
}
