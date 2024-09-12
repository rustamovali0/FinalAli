<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function index() {
        $slider = Slider::where('status', '1')->first();

        $products = Product::where('status', '1')->get();

        $categories = Category::all();

        $services = Service::all();

        $blogs = Blog::where('status', '1')->get();
        $about = Service::all();

        $title = "Homepage";

        return view('Front.pages.index', compact('slider', 'title', 'products', 'categories', 'services', 'blogs','about'));
    }
}
