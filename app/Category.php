<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    public function scopeActive($query)
    {
        return $query->where('status',Category::ACTIVE_STATUS);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
