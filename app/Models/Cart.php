<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable =[
        'foodprice_id',
        'quantity'
    ];

    public function cartPrice(){
        return $this->belongsTo(FoodPrice::class,'foodprice_id');
    }
}
