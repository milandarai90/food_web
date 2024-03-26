<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryInfo;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryInfoController extends Controller
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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function create()
    {
        $data['user'] = Auth::user();
        $data['category'] = Category::all();
        $data['food'] = Food::all();
        return view('admins.menu.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryInfo $categoryInfo)
    {
        $categoryInfo->category_id = $request->category;
        $categoryInfo->food_id = $request->food;
        $categoryInfo->save();
        return back()->with('success', 'Category info created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryInfo  $categoryInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryInfo $categoryInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryInfo  $categoryInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryInfo $categoryInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryInfo  $categoryInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryInfo $categoryInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryInfo  $categoryInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryInfo $categoryInfo)
    {
        //
    }
}
