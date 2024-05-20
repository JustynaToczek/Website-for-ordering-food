<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_name',
        'city_id',
        'picture_path',
    ];
    protected $primaryKey = 'restaurant_id';
    public $timestamps = false;

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class, 'restaurant_id', 'restaurant_id');
    }

    public function cities(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }
}
