<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $about = About::where('id', 1)->first();
        return view('Front.pages.about',compact('about'));
    }
    public function services()
    {
        return view('Front.pages.services');
    }
    public function proDetails($slug)
    {
        $product = Product::whereSlug($slug)->first();
        return view('Front.pages.proDetails',compact('product'));
    }
    public function products()
    {
       $products = Product::where('status','1')->get();
        return view('Front.pages.products',compact('products'));
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
