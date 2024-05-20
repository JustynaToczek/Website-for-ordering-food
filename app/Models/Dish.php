<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'dish_name',
        'restaurant_id',
        'dish_price',
        'picture_path',
    ];

    protected $primaryKey = 'dish_id';

    public $timestamps = false;

    public function ordered_dishes(): HasMany
    {
        return $this->hasMany(Ordered_dish::class, 'dish_id', 'dish_id');
    }

    public function restaurants(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'restaurant_id');
    }
}
