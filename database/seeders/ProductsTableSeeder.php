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

        $highlightsCount = 0;
        for ($i = 0; $i < 100; $i++) {
            $highlight = ($highlightsCount < 5) ? true : false;
            $product = Product::create([
                'name'          => $faker->word(),
                'description'   => $faker->text(200),
                'img'           => 'https://picsum.photos/id/' . rand(1, 50) . '/500/400',
                'codeEan'       => $faker->randomNumber(5, true),
                'price'         => $faker->randomFloat(2, 1, 100),
                'highlight'     => $highlight,
                'creation'      => $faker->date(),
                'edit'          => $faker->date()
            ]);
            if ($highlight) {
                $highlightsCount++;
            }
        }
    }
}
