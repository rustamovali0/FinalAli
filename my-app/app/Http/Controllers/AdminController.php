<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Admin paneli ana sayfası
    public function index()
    {
        return view('admin.dashboard');
    }

    // Site ayarlarını yönetmek için
    public function settings()
    {
        return view('admin.settings');
    }

    // İletişim sayfasındaki mesajları yönetmek için
    public function contact()
    {
        // Veritabanından mesajları çekme işlemi
        $messages = \App\Models\Contact::all();
        return view('admin.contact', compact('messages'));
    }
}
