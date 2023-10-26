<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosial extends Model
{
    use HasFactory;
    protected $table="sosial";
    protected $fillabe=["id",
    "sosial_facebook","sosial_twitter","sosial_instagram","sosial_youtube","created_at","updated_at"];
}
