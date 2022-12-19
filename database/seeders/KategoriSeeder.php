<?php

namespace Database\Seeders;

use App\Models\Blog\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            "nama_kategori" => "Teknologi",
            "slug" => "teknologi"
        ]);

        Kategori::create([
            "nama_kategori" => "Geofisial",
            "slug" => "geofisial"
        ]);

        Kategori::create([
            "nama_kategori" => "Mapping",
            "slug" => "mapping"
        ]);
    }
}
