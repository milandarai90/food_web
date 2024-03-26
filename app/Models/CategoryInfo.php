<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'food_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function food(){
        return $this->belongsTo(Food::class,'food_id');
    }
}
