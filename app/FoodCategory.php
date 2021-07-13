<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FoodCategory extends Model
{
    /**
     * Get all of the food_sub_categories for the FoodCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function food_sub_categories()
    {
        return $this->hasMany(FoodSubCategory::class);
    }
}