<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Sluggable;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $printer = Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Printerler',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> null,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Printer Canon',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $printer->id,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Printer Hp',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $printer->id,
        ]);
        $kartic = Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Karticler',
            'content' => 'Welcome',
            // 'link' => 'products',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=>null,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Kartic canon',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $kartic->id,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Kartic Hp',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $kartic->id,
        ]);
        $toner = Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Tonerler',
            'content' => 'Welcome',
            // 'link' => 'products',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=>null,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Toner Canon',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $toner->id,
        ]);
        Category::create([

            'image' => 'https://fakeimg.pl/250x100/',
            'name' => 'Toner Hp',
            'content' => 'Welcome',
            'status' => '1',
            'thumbnail'=>null,
            'content'=>'Welcome SeederTest',
            'cat_ust'=> $toner->id,
        ]);

    }
}
