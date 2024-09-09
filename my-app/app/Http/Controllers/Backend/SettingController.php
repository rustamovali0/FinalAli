<?php
namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    // Tüm ayarları listeleme
    public function index()
    {
        $settings = Setting::all();  // Tüm ayarları al
        return view('Panel.pages.setting.index', compact('settings'));
    }

    // Yeni ayar oluşturma formunu gösterme
    public function create()
    {
        return view('Panel.pages.setting.edit');
    }

    // Yeni ayar oluşturma
    public function store(Request $request)
    {
        // Veriyi doğrula
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'data' => 'required|string',
        ]);

        // Yeni bir Setting kaydı oluştur
        $setting = new Setting();
        $setting->name = $request->input('name');
        $setting->data = $request->input('data');
        $setting->save();  // Veritabanına kaydet

        return redirect()->route('setting.index')->with('success', 'Ayar başarıyla eklendi');
    }

    // Ayar güncelleme formunu gösterme
    public function edit($id)
{
    $setting = Setting::find($id);
    if (!$setting) {
        return redirect()->route('setting.index')->with('error', 'Ayar bulunamadı');
    }
    return view('Panel.pages.setting.edit', compact('setting'));
}


    // Ayarı güncelleme
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'data' => 'required|string',
        ]);
    
        $setting = Setting::find($id);
    
        if (!$setting) {
            return redirect()->route('setting.index')->with('error', 'Ayar bulunamadı');
        }
    
        $setting->update([
            'name' => $request->input('name'),
            'data' => $request->input('data'),
        ]);
    
        return redirect()->route('setting.index')->with('success', 'Ayar başarıyla güncellendi');
    }
    
public function destroy($id)
{
    // Kayıt var mı kontrol et
    $setting = Setting::find($id);

    if (!$setting) {
        return redirect()->route('setting.index')->with('error', 'Ayar bulunamadı');
    }

    // Kayıt sil
    $setting->delete();

    return redirect()->route('setting.index')->with('success', 'Ayar başarıyla silindi');
}

}
