<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        return view('order.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {

        $order->receiver =  $request->receiver;
        $order->address =  $request->address;
        $order->contact =  $request->contact;
        $order->user_id = Auth::user()->id;
        $order->save();


        return redirect('/order-detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function orderDetail(){
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'active ')->select('foodprice_id','user_id', 'quantity')->get();
        $order = Order::latest()->take(1)->first();
        // dd($order->id);
        foreach ($cart as $item) {
            $total_amount =  $item->cartPrice->price * $item->quantity;
            // dd($item->price_id);
            $order_detail = new OrderDetail();
            $order_detail->price_id = $item->foodprice_id;
            $order_detail->quantity = $item->quantity;
            $order_detail->order_id = $order->id;
            $order_detail->total_amount = $total_amount;

            // $order_detail->user_id = $item->user_id;
            $order_detail->save();
        }
        return redirect('/disable-cart');
    }

    public function cartManagement(Cart $cart){
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 'active ')->get();
        foreach($cart as $item) {
            // dd($item->id);
            $cart = Cart::find($item->id);
            $cart->foodprice_id = $item->foodprice_id;
            $cart->user_id = $item->user_id;
            $cart->quantity = $item->quantity;
            $cart->status = "disabled";
            $cart->save();
        }

        return redirect('/cart')->with('success','Your order has been placed successfully');
    }

    public function orderRestaurant(){
        $data['user'] = Auth::user();
        $data['orders'] = OrderDetail::with(['order','price'])->get()->groupBy('order_id');
        // dd($data['orders']);
        return view('order.restaurant',$data);
    }
}
