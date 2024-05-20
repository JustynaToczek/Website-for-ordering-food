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
        'city_id',
        'street_name',
        'flat_number',
        'phone_number',
    ];

    protected $primaryKey = 'address_id';

    public $timestamps = false;

    public function cities(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'address_id', 'address_id');
    }
}
