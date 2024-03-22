<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $category_ids = Category::all()->pluck('id');

        for ($i = 0; $i < 5; $i++) {
            $product = new Product;
            $product->category_id = $faker->randomElement($category_ids);
            $product->name = $faker->words(2, true);
            $product->description = $faker->paragraphs(4, true);
            $product->image = $faker->imageUrl(640, 480, 'cafè', true);
            $product->isbn = $faker->randomNumber(7, true) . $faker->randomNumber(6, true);
            $product->price = $faker->randomFloat(2, 20, 100);
            $product->featured = 1;
            $product->save();
        }

        for ($i = 0; $i < 95; $i++) {
            $product = new Product;
            $product->category_id = $faker->randomElement($category_ids);
            $product->name = $faker->words(2, true);
            $product->description = $faker->paragraphs(4, true);
            $product->image = $faker->imageUrl(640, 480, 'cafè', true);
            $product->isbn = $faker->randomNumber(7, true) . $faker->randomNumber(6, true);
            $product->price = $faker->randomFloat(2, 20, 100);
            $product->featured = 0;
            $product->save();
        }
    }
}
