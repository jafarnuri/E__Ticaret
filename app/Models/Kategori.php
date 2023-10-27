<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table="kategoriya";
    protected $fillabe=["id",
    "kategoriya_ad","created_at","updated_at"];
}
