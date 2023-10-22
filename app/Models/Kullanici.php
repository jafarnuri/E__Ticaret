<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    use HasFactory;
    protected $table="kullanici";
    protected $fillabe=["kullanici_id ",
    "kullanici_ad","kullanici_soyad","kullanici_resim","kullanici_mail","kullanici_tel","kullanici_adres",
    "kullanici_sheher","kullanici_olke","kullanici_password","created_at","updated_at"];
}
