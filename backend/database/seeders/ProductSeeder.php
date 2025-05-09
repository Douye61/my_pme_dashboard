<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $i) {
            Product::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 5, 300),
                'description' => $faker->sentence
            ]);
        }
        
}}
?>