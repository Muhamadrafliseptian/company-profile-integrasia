<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\EcoSpirit;
use Illuminate\Http\Request;

class EcoSpiritController extends Controller
{
    public function index()
    {
        $data = [
            "data_eco_spirit" => EcoSpirit::get()
        ];

        return view("admin.master.eco_spirit.index", $data);
    }

    public function store(Request $request)
    {
        EcoSpirit::create([
            "eco_spirit_icon" => $request->eco_spirit_icon,
            "eco_spirit_judul" =>$request->eco_spirit_judul,
            "eco_spirit_deskripsi" => $request->eco_spirit_deskripsi,
            "eco_spirit_gambar" => $request->eco_spirit_gambar
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => EcoSpirit::where("id", $request->id)->first()
        ];

        return view("admin.master.eco_spirit.edit", $data);
    }

    public function update(Request $request)
    {
        EcoSpirit::where("id", decrypt($request->id))->update([
            "eco_spirit_icon" => $request->eco_spirit_icon,
            "eco_spirit_judul" =>$request->eco_spirit_judul,
            "eco_spirit_deskripsi" => $request->eco_spirit_deskripsi,
            "eco_spirit_gambar" => $request->eco_spirit_gambar
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        EcoSpirit::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
