<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryStudyCase extends Model
{
    use HasFactory;
    protected $table = "gallery_study_case";

    protected $guarded = [''];

    public function getStudyCase()
    {
        return $this->belongsTo("App\Models\Master\StudyCase", "id_gallery_study_case", "id");
    }
}
