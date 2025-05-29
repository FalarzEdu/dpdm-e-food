<?php

namespace App\Http\Controllers;

use App\Models\FoodCategories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $foodCategories = FoodCategories::all();

        return view('home', compact('foodCategories'));
    }
}
