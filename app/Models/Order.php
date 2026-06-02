<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'number_phone',
        'notes',
        'date_ordered',
        'deadline',
        'date_completed',
        'date_received',
        'status',
        'dp_amount',
        'total_amount',
        'payment_status'
    ];
    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
    public function products()
    {
    return $this->belongsToMany(Product::class, 'order_items')
                ->withPivot('quantity', 'unit_price', 'subtotal', 'is_custom', 'notes', 'custom_photo')
                ->withTimestamps();
    }
}
