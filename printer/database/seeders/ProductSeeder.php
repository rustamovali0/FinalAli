<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Kartic',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>1,
            'short_text'=>'printer kartici',
            'price'=>100,
            'color'=>'black',
            'qty'=>'10',
            'status'=>'1',
            'suitability'=>'aaa',
            'content'=>'kartic desc',
        ]);
        Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);   Product::create([
            'name'=>'Kartic 2',
            'image'=>'https://picsum.photos/200/300',
            'category_id'=>2,
            'short_text'=>'printer kartici 2',
            'price'=>120,
            'color'=>'black2',
            'qty'=>'102',
            'status'=>'1',
            'suitability'=>'aaa2',
            'content'=>'kartic desc2',
        ]);

    }
}
