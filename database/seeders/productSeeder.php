<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            $imagePath = 'public/images/p'.($index % 20 + 1).'.png';
            \DB::table('products')->insert([
                'product_id' => $index,
                'product_name' => $faker->word,
                'product_quantity' => $faker->numberBetween(1, 100),
                'product_description' => $faker->sentence(6),
                'product_type_id' => $faker->numberBetween(1, 5),
                'product_price' => $faker->randomFloat(2, 10, 1000),
                'product_image' => $imagePath,
            ]);
        }
    }
}
