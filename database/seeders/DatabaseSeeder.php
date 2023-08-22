<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         // Schema::disableForeignKeyConstraints();


        \App\Models\Product::truncate();
        \App\Models\Category::truncate();
        \App\Models\Order::truncate();
        \App\Models\User::truncate();
        \App\Models\UserProduct::truncate();

        // Schema::enableForeignKeyConstraints();

        \App\Models\Product::factory(1)->create();
        \App\Models\Category::factory(1)->create();
        \App\Models\Order::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\UserProduct::factory(1)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
