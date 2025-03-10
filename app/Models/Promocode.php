<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promocodes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'discount_type', 'discount_amount', 'is_active', 'valid_until', 'times_used'];
    /**
     * Check if the promo code is valid.
     */
    public function isValid()
    {
        return $this->is_active &&
            (!$this->valid_until || now()->lessThanOrEqualTo($this->valid_until));
    }

    /**
     * Increment the usage count.
     */
    public function incrementUsage()
    {
        $this->increment('times_used');
    }
}
