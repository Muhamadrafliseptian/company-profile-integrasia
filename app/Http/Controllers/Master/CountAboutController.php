<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\CountAbout;
use Illuminate\Http\Request;

class CountAboutController extends Controller
{
    public function index()
    {
        $data = [
            "data_about" => CountAbout::get()
        ];

        return view("admin.master.count_about.index", $data);
    }

    public function store(Request $request)
    {
        CountAbout::create([
            "icon" => $request->about_icon,
            "judul" =>$request->about_judul,
            "deskripsi" => $request->about_deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => CountAbout::where("id", $request->id)->first()
        ];

        return view("admin.master.count_about.edit", $data);
    }

    public function update(Request $request)
    {
        CountAbout::where("id", decrypt($request->id))->update([
            "icon" => $request->about_icon,
            "judul" => $request->about_judul,
            "deskripsi" => $request->about_deskripsi,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        CountAbout::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
