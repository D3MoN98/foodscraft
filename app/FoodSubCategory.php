<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FoodSubCategory extends Model
{
    /**
     * Get all of the food_items for the FoodSubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function food_items()
    {
        return $this->hasMany(FoodItem::class);
    }
}