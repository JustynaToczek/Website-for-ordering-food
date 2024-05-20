<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
    ];

    public $timestamps = false;
    protected $primaryKey = 'city_id';

    public function restaurants(): HasMany
    {
        return $this->hasMany(Restaurant::class, 'city_id', 'city_id');
    }

    public function delivery_adresses(): HasMany
    {
        return $this->hasMany(Delivery_address::class, 'city_id', 'city_id');
    }
}
