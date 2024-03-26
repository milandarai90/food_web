<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryInfo;
use App\Models\Food;
use App\Models\FoodPrice;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data['restaurant'] = Restaurant::all();
        $data['user'] = Auth::user();
        $data['price'] = FoodPrice::take(4)->get();
        $data['restaurant'] = Restaurant::take(2)->get();
        $data['categoryinfo'] = CategoryInfo::with(['category', 'food'])->take(8)->get();
        $data['category'] = Category::with(['categoryImage', 'categoryInfo'])->take(4)->get();
        $data['images'] = Image::take(1)->get();
        return view('dashboard.home', $data);
    }

    public function contact()
    {
        $data['user'] = Auth::user();
        return view('dashboard.contact', $data);
    }
    public function login()
    {
        $data['user'] = Auth::user();
        return view('dashboard.login', $data);
    }
    public function viewFood($id)
    {
        $data['user'] = Auth::user();
        $data['price'] = FoodPrice::with(['priceFood', 'priceRestaurant'])->where('food_id', $id)->get();
        $data['food'] = Food::find($id);
        return view('dashboard.foodView', $data);
    }
    public function about()
    {
        $data['user'] = Auth::user();
        return view('dashboard.about', $data);
    }
    public function delivery()
    {
        $data['user'] = Auth::user();
        return view('dashboard.deliverycharge', $data);
    }
    public function terms()
    {
        $data['user'] = Auth::user();
        return view('dashboard.terms', $data);
    }
    public function privacy()
    {
        $data['user'] = Auth::user();
        return view('dashboard.privacy', $data);
    }
    public function how_order()
    {
        $data['user'] = Auth::user();
        return view('dashboard.how', $data);
    }
    public function faq()
    {
        $data['user'] = Auth::user();
        return view('dashboard.faq', $data);
    }
    public function search(Request $request)
    {
        $data['user'] = Auth::user();
        $search = $request->search_bar;
        $data['food'] = Food::where('name', 'like', '%' . $search . '%')->get();
        // $data['category'] = Category::with(['categoryInfo', 'subCategory', 'categoryImage'])->where('categoryInfo->food->name', $food)->get();
        return view('menu.search', $data);
    }

    public function userHistory(){
        $data['user'] = Auth::user();
        $data['order'] = OrderDetail::with(['order','price'])->orderBy('created_at','desc')   ->get()->groupBy('order_id');
        return view('order.history',$data);
    }

//     // Redirect to your desired location after logout
//     return redirect()->route('dashboard'); // Change 'dashboard' to your actual route name.
// }
}
