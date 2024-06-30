<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the order.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product associated with the order.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the order status associated with the order.
     */
    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

}
