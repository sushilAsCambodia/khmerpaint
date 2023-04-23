<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeActive($query){
        return $query->where('status',1);
    }
    public function toArray()
    {
        $attributes = parent::toArray();
        if(!empty($attributes['product_image'])){
            $attributes['product_image'] = url('/') . '/storage/' . $attributes['product_image'];
        }
        return $attributes;
    }
}
