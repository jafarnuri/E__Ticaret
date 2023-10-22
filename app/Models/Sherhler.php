<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sherhler extends Model
{
    use HasFactory;
    protected $table="sherhler";
    protected $fillabe=["sherh_id",
    "kullanici_id","mehsul_id","sherh_detay","ayar_achiqlama","sherh_testiq","created_at","updated_at"];
}
