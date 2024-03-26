<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
    ];

    public function categoryImage(){
        return $this->hasOne(CategoryImage::class,'category_id');
    }

    public function subCategory(){
        return $this->hasMany(SubCategory::class,'category_id');
    }

    public function categoryInfo(){
        return $this->hasMany(CategoryInfo::class,'category_id');
    }
}
