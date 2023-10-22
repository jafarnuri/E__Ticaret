<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table="kategori";
    protected $fillabe=["kategori_id ",
    "kategori_ad","kategori_ust","kategori_seourl","kategori_sira","created_at","updated_at"];
}
