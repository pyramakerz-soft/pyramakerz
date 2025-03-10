<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'name',
    //     'ar_name',
    //     'description',
    //     'price',
    //     'stock',
    //     'category',
    //     'image'
    // ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
