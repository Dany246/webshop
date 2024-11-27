<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public $guarded = [
    ];

    function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}

