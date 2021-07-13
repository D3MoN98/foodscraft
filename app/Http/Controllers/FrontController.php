<?php

namespace App\Http\Controllers;

use App\FoodCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $food_categories = FoodCategory::all();
        $popular_menu = FoodCategory::find(1);
        return view('home')->with([
            'food_categories' => $food_categories,
            'popular_menu' => $popular_menu,
        ]);
    }

    public function menu()
    {
        $food_categories = FoodCategory::all();
        return view('menu')->with([
            'food_categories' => $food_categories
        ]);
    }

    public function about()
    {
        $food_categories = FoodCategory::all();

        return view('about')->with([
            'food_categories' => $food_categories
        ]);
    }
}