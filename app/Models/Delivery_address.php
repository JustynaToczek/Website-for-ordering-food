<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Delivery_address extends Model
{
    use HasFactory;

    protected $fillable = [
        'town',
        'street_name',
        'flat_number',
        'phone_number',
        'user_id',
    ];

    public $timestamps = false;

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
