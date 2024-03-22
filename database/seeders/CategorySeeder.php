<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $csvData = fopen(base_path('database/csv/categories.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if (!$transRow) {
                Category::create([
                    'label' => $data['0'],
                    'color' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
