<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function toArray()
    {
        $attributes = parent::toArray();
        if(!empty($attributes['image'])){
            $attributes['image'] = url('/') . '/storage/' . $attributes['image'];
        }
        return $attributes;
    }
}
