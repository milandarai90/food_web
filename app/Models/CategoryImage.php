<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'image_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function image(){
        return $this->belongsTo(Image::class,'image_id');
    }
}
