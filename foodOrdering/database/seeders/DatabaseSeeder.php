<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        \App\Models\User::factory(10)->create();
        Product::factory(10)->create();
        
        $category = \App\Models\Category::create([
            'category_name' => 'Food',
            'category_desc' => 'Food products',
        ]);

        // \App\Models\Product::factory(10)->create([
        //     'category_id' => '1',
        // ]);


    }
}
