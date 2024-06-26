<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address_id',
        'date',
        'total_price',
    ];

    public $timestamps = true;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function delivery_addresses(): BelongsTo
    {
        return $this->belongsTo(Delivery_address::class, "address_id");
    }

    public function ordered_dishes(): HasMany
    {
        return $this->hasMany(Ordered_dish::class);
    }
}
