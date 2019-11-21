<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id',
        'category_id',
        'category_name',
        'product_id',
        'product_name',
        'unit_price',
        'quantity',
        'subtotal',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
