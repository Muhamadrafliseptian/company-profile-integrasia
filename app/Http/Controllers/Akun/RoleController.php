<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\Role;
use App\Models\Pengaturan\Menu;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => Role::get(),
            "data_menu" => Menu::get()
        ];

        return view("admin.akun.role.index", $data);
    }

    public function store(Request $request)
    {
        $cek = Role::where("role", $request->role)->count();

        if ($cek > 0) {
            return back()->with(["message" => '<script>swal("Gagal", "Tidak Boleh Duplikasi Data", "error");</script>']);
        } else {
            Role::create($request->all());

            return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil ditambahkan", "success");</script>']);
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Role::where("id", $request->id)->first()
        ];

        return view("admin.akun.role.edit", $data);
    }

    public function update(Request $request)
    {
        Role::where("id", decrypt($request->id))->update([
            "role" => $request->role
        ]);

        return redirect()->back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil disimpan", "success");</script>']);
    }

    public function destroy($id)
    {
        Role::where("id", decrypt($id))->delete();

        return back()->with(["message" => '<script>swal("Berhasil", "Data Berhasil di Hapus", "success");</script>']);
    }

    public function menu_role(Request $request)
    {
        $data = [
            "role" => Role::where("id", $request->id)->first(),
            "data_menu" => Menu::get()
        ];

        return view("admin.pengaturan.menu_role.index", $data);
    }
}
