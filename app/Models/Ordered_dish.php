<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ordered_dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'dish_id',
        'quantity',
    ];

    public $timestamps = false;

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function dishes(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }
}
