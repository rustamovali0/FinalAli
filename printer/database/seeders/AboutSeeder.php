<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'https://fakeimg.pl/250x100/',
            'name'=>'Printerler',
            'content'=>'lorem impum dolor amet sit',
        ]);
    }
}
