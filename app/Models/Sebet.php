<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sebet extends Model
{
    use HasFactory;
    protected $table="sebets";
    protected $fillabe=["id",
    "user_id","mehsul_id","mehsul_eded"];
}
