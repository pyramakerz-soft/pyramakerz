<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_name',
        'features',
    ];

    protected $casts = [
        'features' => 'array', // Automatically converts JSON to an array when fetched
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
