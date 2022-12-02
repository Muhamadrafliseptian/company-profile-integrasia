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
            "data_about" => CountAbout::first()
        ];

        return view("admin.master.count_about.index", $data);
    }

    public function store(Request $request)
    {
        CountAbout::create([
            "deskripsi" => $request->about_deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }

    public function update(Request $request, $id)
    {
       CountAbout::where("id", decrypt($id))->update([
            "deskripsi" => $request->about_deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }
}
