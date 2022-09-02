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
            "about_icon" => $request->about_icon,
            "about_judul" =>$request->about_judul,
            "about_deskripsi" => $request->about_deskripsi
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Tambahkan", "success");</script>']);
    }
}
