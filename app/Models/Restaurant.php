<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable=[
        'restaurant_name',
        'restaurant_code',
        'address',
        'contact1',
        'contact2',
        'email',
        'restaurant_owner',
        'pan_number'
    ];

    public function restaurantPrice(){
        return $this->hasMany(FoodPrice::class,'restaurant_id');
    }

    public function user(){
        return $this->hasOne(User::class,'restaurant_id');
    }
}
