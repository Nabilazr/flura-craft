<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name'.
        'description'.
        'price',
        'stock',
        'photo',
        'min_stock'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function stockmovements()
    {
        return $this->hasMany(StockMovement::class);
    }
    public function orderitem()
    {
        return $this->hasMany(OrderItem::class);
    }
}
