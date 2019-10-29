<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function scopeActive($query)
    {
        return $query->where('status',Product::ACTIVE_STATUS);
    }
}
