<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodCategories extends Model
{
    public function Shops(): HasMany
    {
        return $this->hasMany(Shop::class, foreignKey: 'category_id');
    }
}
