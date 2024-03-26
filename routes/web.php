<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryImageController;
use App\Http\Controllers\CategoryInfoController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodPriceController;
use App\Http\Controllers\FoodTypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return redirect('/home');
});
// Route::get('/contact', function () {
//     return view('dashboard.contact');
// });
// Route::get('/main',function(){
//     return view('layouts.main');
// });
// Route::get('/home', function () {
//     return view('dashboard.mid.home');
// });
// Route::get('/login-form', function () {
//     return view('dashboard.login');
// });
// Route::get('/signup', function () {
//     return view('dashboard.signup');
// });
// Route::get('/about', function () {
//     return view('dashboard.about');
// });
// Route::get('/delivery-charges', function () {
//     return  view('dashboard.mid.deliverycharge');
// });
// Route::get('/terms-condition', function () {
//     return view('dashboard.mid.terms');
// });
// Route::get('/privacy', function () {
//     return view('dashboard.mid.privacy');
// });
// Route::get('/how-to-order', function () {
//     return view('dashboard.mid.how');
// });
// Route::get('/faq', function () {
//     return view('dashboard.mid.faq');
// });
Route::get('/back', function () {
    return back();
});


Route::resource('menu', MenuController::class);
Route::resource('categoryinfo', CategoryInfoController::class);
Route::resource('home', HomeController::class);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/delivery-charges', [HomeController::class, 'delivery']);
Route::get('/terms-condition', [HomeController::class, 'terms']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/how-to-order', [HomeController::class, 'how_order']);
Route::get('/faq', [HomeController::class, 'faq']);

Route::get('/admin-login', [UserController::class, 'showLogin'])->name('login');
Route::post('/admin-auth', [UserController::class, 'authLogin']);
Route::post('/user-auth', [UserController::class, 'userLogin']);
Route::resource('users', UserController::class);
// Route::get('/user-store',[UserController::class,'storeUser']);
// Route::post('/users', 'UserController@store')->name('users.store');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('food', FoodController::class);
    Route::resource('foodtype', FoodTypeController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('type', FoodTypeController::class);
    Route::resource('images', ImageController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('categoryimages', CategoryImageController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('price', FoodPriceController::class);
    Route::resource('restaurant', RestaurantController::class);
    Route::resource('cart', CartController::class);
    Route::resource('order', OrderController::class);
    Route::get('/order-restaurant',[OrderController::class,'orderRestaurant'])->name('order.restaurant');
    Route::get('/user-history',[HomeController::class,'userHistory']);

    Route::get('/food/update/{id}', [FoodController::class, 'update']);
    Route::get('/foodtype/update/{id}', [FoodTypeController::class, 'update']);
});
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/restaurant/edit/{id}', [RestaurantController::class, 'edit']);
Route::get('/restaurant/destroy/{id}', [RestaurantController::class, 'destroy']);
Route::get('/food/view/{id}', [HomeController::class, 'viewFood']);
Route::get('/restaurants', [RestaurantController::class, 'restaurant']);
Route::get('/menu-search', [HomeController::class, 'search']);
Route::get('/order-detail', [OrderController::class, 'orderDetail']);
Route::get('/disable-cart', [OrderController::class, 'cartManagement']);
