<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodPrice extends Model
{
    use HasFactory;

    protected $fillable=[
        'price',
    ];

    public function priceFood() {
        return $this->belongsTo(Food::class,'food_id');
    }

    public function priceRestaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }

    public function priceCart(){
        return $this->hasMany(Cart::class,'foodprice_id');
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
}
