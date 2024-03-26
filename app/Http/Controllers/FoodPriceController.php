<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodPrice;
use App\Models\User;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FoodPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        $data['user'] = $users;
        $data['prices'] = FoodPrice::with(['priceFood','priceRestaurant'])->where('restaurant_id',$users->restaurant_id)->get()->sortBy(function($query){
            return $query->priceFood->name;
        });;
        // dd($data['prices']);
        return view('admins.price.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['food'] = Food::all();
        $data['user'] = Auth::user();
        return view('admins.price.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FoodPrice $price)
    {
        // $this->validate($request, [
        //     'food' => 'required|max:200|unique:users,name',
        //     'restaurant' => 'required|unique:users,email',
        // ]);
        $user=Auth::user();
        $price->food_id = $request->food;
        $price->restaurant_id = $user->restaurant->id;
        $price->price = $request->price;
        $price->save();
        return back()->with('success', 'Food Price created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function show(FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodPrice $foodPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodPrice  $foodPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodPrice $foodPrice,$id)
    {

        FoodPrice::destroy($id);
        return back();
    }
}
