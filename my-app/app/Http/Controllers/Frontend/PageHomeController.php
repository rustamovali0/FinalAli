<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index() {
        $slider = Slider::where('status', '1')->first();
        $title = "Homepage";


        $categories = Category::where('status','1')->get();

        return view('Front.pages.index',compact('slider','title','categories'));
    }
}
