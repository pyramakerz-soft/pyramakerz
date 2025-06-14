<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ['name', 'description', 'price', 'ar_name', 'image'];
    protected $casts = [
        'bullets' => 'array',
        'ar_bullets' => 'array',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'package_products')
            ->withPivot('quantity')
            ->withTimestamps();
    }
    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_products')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
