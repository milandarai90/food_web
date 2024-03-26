<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryImageController extends Controller
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
        $data['categoryimages'] = CategoryImage::with(['image','category'])->get();
        return view('admins.images.categoryimages.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        $data['images'] = Image::all()->sortBy(function($query){
            return $query->name;
        });;
        $data['categories'] = Category::all();
        return view('admins.images.categoryimages.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryImage $categoryImage)
    {
        $categoryImage->category_id = $request->category;
        $categoryImage->image_id = $request->image;
        $categoryImage->save();
        return back()->with('success', 'Category image has been set successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryImage $categoryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryImage  $categoryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryImage $categoryImage)
    {
        //
    }
}
