<?php

namespace Database\Seeders;

use ServiceSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
     $this->call([
            SliderSeeder::class,
            CategorySeeder::class,
            AboutSeeder::class,
            SettingSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,
     ]);
    }
}
