<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shop extends Model
{
    /** @use HasFactory<\Database\Factories\ShopFactory> */
    use HasFactory;

        protected $fillable = [
        'name',
        'food_category_id',
        'image',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FoodCategories::class, foreignKey: 'category_id');
    }
}
