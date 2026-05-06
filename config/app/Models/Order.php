<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id', 'quantity', 'customer_name', 'phone_number', 'delivery_address', 'total_price', 'status', 'sugar_level', 'size'];

    protected $casts = [
        'quantity' => 'integer',
        'total_price' => 'float',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
