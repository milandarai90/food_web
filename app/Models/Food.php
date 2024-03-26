<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Print_;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function categoryInfo(){
        return $this->hasMany(CategoryInfo::class,'food_id');
    }

    public function foodPrice(){
        return $this->hasMany(FoodPrice::class,'food_id');
    }
}
