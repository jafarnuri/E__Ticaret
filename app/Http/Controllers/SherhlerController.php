<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sherhler;
use App\Models\Kullanici;

class SherhlerController extends Controller
{
    public function sherh_elavet(Request $request)
    {
     $kullanici=Kullanici::get();
     $sherh= new Sherhler();
     $sherh->kullanici_id= $request->input('kullanici_id');
     $sherh->sherh_detay= $request->input('sherh_detay');
     $sherh->sherh_testiq= $request->input('sherh_testiq');



    $sherh->save();
    return back()->with("status","YUklenme ugurla yerine yetirildi");    
    }

    public function sherhsil($id)
    {

         $sherh=Sherhler::find($id);
            
         $sherh->delete();


        return back()->with("status","Silinme ugurla yerine yetirildi");
       

    } 
}
