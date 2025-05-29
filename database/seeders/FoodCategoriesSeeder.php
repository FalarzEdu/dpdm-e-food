<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodCategories;

class FoodCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodCategories::create([
            'name' => 'Pizza',
            'description' => 'A delicious Italian dish made with a round base of dough topped with cheese, tomatoes, and various other ingredients.',
            'image' => 'pizza.jpeg',
        ]);
        FoodCategories::create([
            'name' => 'Burger',
            'description' => 'A sandwich consisting of a cooked patty of ground meat, usually beef, placed inside a sliced bun.',
            'image' => 'burger.jpeg',
        ]);
        FoodCategories::create([
            'name' => 'Pasta',
            'description' => 'An Italian dish made from wheat flour and water, typically served with a sauce.',
            'image' => 'pasta.jpeg',
        ]);
        FoodCategories::create([
            'name' => 'Salad',
            'description' => 'A dish consisting of a mixture of small pieces of food, usually vegetables or fruit.',
            'image' => 'salad.jpeg',
        ]);
        FoodCategories::create([
            'name' => 'Dessert',
            'description' => 'A sweet course typically eaten at the end of a meal.',
            'image' => 'dessert.jpeg',
        ]);
        FoodCategories::create([
            'name' => 'Sushi',
            'description' => 'A Japanese dish consisting of vinegared rice accompanied by various ingredients, such as seafood and vegetables.',
            'image' => 'sushi.jpeg',
        ]);
    }
}
