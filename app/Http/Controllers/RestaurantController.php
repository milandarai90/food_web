<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Auth::user();
        $data['restaurant'] = Restaurant::all();
        return view('restaurant.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('restaurant.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $restaurant->restaurant_name = $request->name;
        $restaurant->restaurant_code = $request->code;
        $restaurant->address = $request->address;
        $restaurant->contact1 = $request->contact1;
        $restaurant->contact2 = $request->contact2;
        $restaurant->email = $request->email;
        $restaurant->restaurant_owner = $request->owner;
        $restaurant->pan_number = $request->pan_no;
        $restaurant->save();
        return redirect('/restaurant/create')->with('success', 'Restaurant stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant,$id)
    {
        $data['user'] = Auth::user();
        $data['restaurant'] = Restaurant::find($id);
        return view('restaurant.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant,$id)
    {
        Restaurant::destroy($id);
        return back();
    }

    public function restaurant(){
        $data['user'] = Auth::user();
        $data['restaurant'] = Restaurant::all();
        return view('restaurant.restaurant',$data);
    }
}
