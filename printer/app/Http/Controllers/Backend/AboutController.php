<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('Panel.pages.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('Panel.pages.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $about = new About();
        $about->name = $request->name;
        $about->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $about->image = $imagePath;
        }

        $about->save();
        return redirect()->route('about.index')->with('success', 'Uğurla yaradıldı');
    }

    public function edit(About $about)
    {
        return view('Panel.pages.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $about->name = $request->name;
        $about->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $about->image = $imagePath;
        }

        $about->save();
        return redirect()->route('about.index')->with('success', 'Uğurla redaktə olundu');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'Uğurla silindi');
    }
}
