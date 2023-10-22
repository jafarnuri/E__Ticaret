<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table="bank";
    protected $fillabe=["bank_id ",
    "bank_ad","bank_kart_kodu","bank_adsoyad","created_at","updated_at"];
}
