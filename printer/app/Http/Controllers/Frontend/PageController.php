<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        $about = About::first(); 
        return view('Front.pages.about', compact('about'));
    }

    public function services()
    {
        $blogs = Blog::all();
        return view('Front.pages.services', compact('blogs'));
    }

    public function proDetails($slug)
    {
        $product = Product::whereSlug($slug)->first();
        return view('Front.pages.proDetails', compact('product'));
    }

    public function products()
    {
        $products = Product::where('status', '1')->get();
        return view('Front.pages.products', compact('products'));
    }

    public function blog()
    {
        return view('Front.pages.blog');
    }

    public function contact()
    {
        return view('Front.pages.form');
    }

    public function form()
    {
        return view('Front.pages.form');
    }
}
