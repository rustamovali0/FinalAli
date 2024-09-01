<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([

            'image'=>'https://fakeimg.pl/250x100/',
            'name'=>'Sliders',
            'content'=>'Welcome',
            'link'=>'products',
            'status'=>'1'
        ]);
    }
}
