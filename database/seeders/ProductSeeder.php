<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Mobile Phone Apple",
            'price' => "500",
        ]);
        DB::table('products')->insert([
            'name' => "TV",
            'description' => "Mobile Phone New",
            'price' => "7200",
        ]);
        DB::table('products')->insert([
            'name' => "SANSUMG",
            'description' => "Mobile Phone New",
            'price' => "2500",
        ]);
    }
}
