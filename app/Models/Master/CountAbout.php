<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountAbout extends Model
{
    use HasFactory;

    protected $table = "about_us";

    protected $guarded = [''];
}
