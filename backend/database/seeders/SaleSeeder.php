<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Employee;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $employeeIds = Employee::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();
        
        foreach (range(1, 50) as $i) {
            Sale::create([
                'product_id' => $faker->randomElement($productIds),
                'employee_id' => $faker->randomElement($employeeIds), 
                'quantity' => $faker->numberBetween(1, 10),
                'sale_date' => $faker->date(),
                'total_price' => $faker->randomFloat(2, 10, 500)
            ]);
        }
        
    }
}
