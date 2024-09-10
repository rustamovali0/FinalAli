<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Service; // Service modelini dahil et
use App\Models\Category; // Blog modelini dahil et
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function index() {
        // Tüm aktif slider'ları getir
        $sliders = Slider::where('status', '1')->first();

        // Tüm aktif ürünleri getir
        $products = Product::where('status', '1')->get();

        // Tüm kategorileri getir
        $categories = Category::all();

        // Tüm servisleri getir
        $services = Service::where('status', '1')->get();

        // Tüm blog yazılarını getir
        $blogs = Blog::where('status', '1')->get();

        // Sayfa başlığı
        $title = "Homepage";

        // Front.pages.index blade dosyasına verileri gönder
        return view('Front.pages.index', compact('sliders', 'title', 'products', 'categories', 'services', 'blogs'));
    }
}
