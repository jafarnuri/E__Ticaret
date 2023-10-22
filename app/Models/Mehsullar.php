<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mehsullar extends Model
{
    use HasFactory;
    protected $table="mehsullar";
    protected $fillabe=["mehsul_id ",
    "kategori_ad","mehsul_ad","mehsul_model","mehsul_resm","mehsul_melumat","mehsul_endirimqiymet",
    "mehsul_qiymet","mehsul_video","mehsul_kilidsoz","mehsul_say","created_at","updated_at"];
}
