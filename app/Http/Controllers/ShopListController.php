<?php

namespace App\Http\Controllers;

use App\Models\FoodCategories;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    public function index(Request $request)
    {
        $shops = $this->getShops($request->get('category_id'));

        return view('ShopList', compact('shops'));
    }

    private function getShops($categoryId)
    {   
        $shops = Shop::where('food_category_id', $categoryId)
            ->where('status', 'active')
            ->orderBy('name')
            ->get();

        return $shops;
    }
}
