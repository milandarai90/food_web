<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'contact','address','receiver'
    ];

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class);
    }

    public function userID(){
        return $this->belongsTo(User::class,'user_id');
    }
}
