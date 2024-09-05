<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index() {
        $slider = Slider::where('status', '1')->first();
        $title = "Homepage";
        $products = Product::where('status', '1')->get(); // Aktif ürünleri alıyoruz



        return view('Front.pages.index',compact('slider','title', 'products'));
    }
}
