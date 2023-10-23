<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Haqqimizda;


class HaqqimizdaController extends Controller
{
    public function haqqimizda_yenile(Request $request)
    {
     $haqqimizda=Haqqimizda::first();
     $haqqimizda->haqqimizda_baslik = $request->input('haqqimizda_baslik');
     $haqqimizda->haqqimizda_umumi	= $request->input('haqqimizda_umumi');
     $haqqimizda->haqqimizda_vidio	= $request->input('haqqimizda_vidio');


    $haqqimizda->update();
    return back()->with("status","Yenileme ugurla yerine yetirildi");    
    }
}
