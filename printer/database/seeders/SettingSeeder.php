<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name'=>'adres',
             'data'=>'adress',
          ]);
          Setting::create([
            'name'=>'phone',
             'data'=>'070-566-66-66',
          ]);
          Setting::create([
            'name'=>'email',
             'data'=>'test@example.com',
          ]);
          Setting::create([
            'name'=>'map',
             'data'=>null,
          ]);
    }
}
