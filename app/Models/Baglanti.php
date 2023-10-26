<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baglanti extends Model
{
    use HasFactory;
    protected $table="baglanti";
    protected $fillabe=["id",
    "baglanti_tel","baglanti_gsm","baglanti_faks","baglanti_mail","baglanti_olke","baglanti_sheher","baglanti_adres","baglanti_isvaxti","created_at","updated_at"];
}
