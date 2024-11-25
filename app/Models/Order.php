<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Specify the table name (optional if the table name matches "orders")
    protected $table = 'orders';

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'shipping_address',
        'customer_phone',
        'placed_on',
        'order_status',
        'user_id',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
