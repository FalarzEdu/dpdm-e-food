<?php

namespace App\Http\Controllers;

use App\Models\FoodCategories;
use App\Models\Shop;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalShops = Shop::count();
        $shops = Shop::all();

        return view('AdminDashboard', compact('totalShops', 'shops'));
    }

    public function switchStatus(Request $request)
    {
        $id = $request->get('id');
        $actualStatus = Shop::where('id', $id)
            ->value('status');
        $newStatus = $actualStatus === 'active' ? 'inactive' : 'active';
        Shop::where('id', $id)
            ->update(['status' => $newStatus]);
        return redirect()->route('dashboard')->with('status', 'Shop status updated successfully.');
    }

    public function newShop()
    {
        $categories = FoodCategories::all();

        return view('NewShop', compact('categories'));
    }

    public function storeShop(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:shops,name',
            'food_category_id' => 'required|exists:food_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('image');
        $fileName = $file->hashName();
        $file->storeAs('attachments', $fileName, 'public');

        $data['image'] = $fileName;

        Shop::create($data);

        return redirect()->route('dashboard')->with('status', 'Shop created successfully.');
    }
}
