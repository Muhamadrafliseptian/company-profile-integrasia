<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Models\Master\Partner;
use App\Http\Controllers\Controller;
use App\Models\GalleryStudyCase;
use App\Models\Master\StudyCase;

class GalleryStudyCaseController extends Controller
{
    public function index (){
        $data = [
            "data_partner" => Partner::get(),
            "data_study_case" => StudyCase::get(),
            "data_gallery_study_case" => GalleryStudyCase::get()
        ];

        return view ("admin.master.study_case.gallery_study_case.index", $data);
    }

    public function store (Request $request){
        if ($request->file("gambar_gallery_study_case")) {
            $data = $request->file("gambar_gallery_study_case")->store("gambar_gallery_study_case");
        }

        GalleryStudyCase::create([
            "id_gallery_study_case" => $request->id_gallery_study_case,
            "gambar_gallery_study_case" => $data
        ]);
        return back();
    }
}
