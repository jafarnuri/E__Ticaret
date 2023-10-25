<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    use HasFactory;
    protected $table="ayarlar";
    protected $fillabe=["id",
    "ayar_bashliq",'ayar_resim',"ayar_logo","ayar_achiqlama","ayar_kilidsoz","ayar_yazar",
    "ayar_tel","ayar_map","ayar_faks","ayar_mail","ayar_olke",
    "ayar_sheher","ayar_adres","ayar_mesai","ayar_facebook","ayar_twitter",
    "ayar_google","ayar_youtube","created_at","updated_at"];
}
