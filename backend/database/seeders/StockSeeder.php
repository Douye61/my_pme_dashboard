<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;
use Faker\Factory as Faker;
use App\Models\Product;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $productIds = Product::pluck('id')->toArray();

        foreach ($productIds as $productId) {
            Stock::create([
                'product_id' => $productId,
                'quantity' => $faker->numberBetween(10, 100),
                'last_updated' => $faker->date()
            ]);
        }
    }
}
