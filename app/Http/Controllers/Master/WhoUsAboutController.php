<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\WhoUsAbout;
use Illuminate\Http\Request;

class WhoUsAboutController extends Controller
{
    public function index()
    {
        $data = [
            "data_whoUs" => WhoUsAbout::get()
        ];

        return view("admin.master.whoUs_about.index", $data);
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => WhoUsAbout::where("id", $request->id)->first()
        ];

        return view("admin.master.whoUs_about.edit", $data);
    }

    public function update(Request $request)
    {
        WhoUsAbout::where("id", decrypt($request->id))->update([
            "judul" => $request->WhoUsAbout_judul,
            "deskripsi" => $request->WhoUsAbout_deskripsi,
        ]);

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Simpan", "success");</script>']);
    }

    public function destroy($id)
    {
        WhoUsAbout::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }
}
