<?php

namespace Database\Seeders;

use App\Models\Shop;
use Database\Factories\ShopFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::factory()->create([
            'name' => 'Burger Delicious',
            'food_category_id' => 2,
            'image' => 'burger_delicious.jpeg',
            'status' => 'active'
        ]);
        Shop::factory()->create([
            'name' => 'Burger Shop',
            'food_category_id' => 2,
            'image' => 'burger_shop.jpeg',
            'status' => 'inactive'
        ]);
        Shop::factory()->create([
            'name' => 'Hot Burger',
            'food_category_id' => 2,
            'image' => 'hot_burger.jpeg',
            'status' => 'active'
        ]);
        Shop::factory()->create([
            'name' => 'Pizzota',
            'food_category_id' => 1,
            'image' => 'pizzota.jpeg',
            'status' => 'active'
        ]);
        Shop::factory()->create([
            'name' => 'Porto Fino',
            'food_category_id' => 3,
            'image' => 'portofino.png',
            'status' => 'active'
        ]);
    }
}
