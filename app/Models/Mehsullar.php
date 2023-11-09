<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mehsullar extends Model
{
    use HasFactory;
    protected $table="mehsullars";
    protected $fillabe=["id",
    "kategoriad","mehsul_ad","mehsul_endirim_tarix","mehsul_model","mehsul_reng","mehsul_resm","mehsul_melumat",
    "mehsul_endirimqiymet","mehsul_qiymet","mehsul_say","mehsul_size","mehsul_olcu","created_at","updated_at"];
}
