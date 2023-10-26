<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    use HasFactory;
    protected $table="ayarlar";
    protected $fillabe=["id",
    "ayar_bashliq","ayar_achiqlama","ayar_kilidsoz","ayar_yazar","created_at","updated_at"];
}
