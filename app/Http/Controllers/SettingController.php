<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('backend.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('backend.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'app_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:512',
        ]);

        $setting = new Setting();
        $setting->app_name = $request->app_name;

        if ($request->hasFile('logo')) {
            $setting->logo = $request->file('logo')->store('settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            $setting->favicon = $request->file('favicon')->store('settings', 'public');
        }

        $setting->save();

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('backend.settings.show', compact('setting'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('backend.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'app_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:512',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->app_name = $request->app_name;

        if ($request->hasFile('logo')) {
            if ($setting->logo) {
                Storage::disk('public')->delete($setting->logo);
            }
            $setting->logo = $request->file('logo')->store('settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            if ($setting->favicon) {
                Storage::disk('public')->delete($setting->favicon);
            }
            $setting->favicon = $request->file('favicon')->store('settings', 'public');
        }

        $setting->save();

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);

        if ($setting->logo) {
            Storage::disk('public')->delete($setting->logo);
        }

        if ($setting->favicon) {
            Storage::disk('public')->delete($setting->favicon);
        }

        $setting->delete();

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil dihapus.');
    }
}
