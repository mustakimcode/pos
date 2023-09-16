<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.index');
    }

    public function show()
    {
        return Setting::first();
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        $setting->name_perusahaan = $request->name_perusahaan;
        $setting->telephone = $request->telephone;
        $setting->address = $request->address;
        $setting->diskon = $request->diskon;
        $setting->tipe_nota = $request->tipe_nota;
        $setting->nota_foot_note = $request->nota_foot_note;

        if ($request->hasFile('path_logo')) {
            $file = $request->file('path_logo');
            $name = 'logo-' . date('YmdHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img'), $name);

            $setting->path_logo = "/img/$name";
        }

        if ($request->hasFile('path_kartu_member')) {
            $file = $request->file('path_kartu_member');
            $name = 'logo-' . date('Y-m-dHis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/img'), $name);

            $setting->path_kartu_member = "/img/$name";
        }

        $setting->update();

        return response()->json('Data berhasil disimpan', 200);
    }
}
