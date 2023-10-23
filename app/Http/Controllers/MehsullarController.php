<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mehsullar;
use App\Models\Kategori;

class MehsullarController extends Controller
{
    public function mehsul_elavet(Request $request)
    {
     $kategori=Kategori::get();
     $mehsul= new Mehsullar();
     $mehsul->kategori_ad= $request->input('kategori_ad');
     $mehsul->mehsul_ad= $request->input('mehsul_ad');
     $mehsul->mehsul_model= $request->input('mehsul_model');
     $mehsul->mehsul_melumat= $request->input('mehsul_melumat');
     $mehsul->mehsul_endirimqiymet= $request->input('mehsul_endirimqiymet');
     $mehsul->mehsul_video= $request->input('mehsul_video');
     $mehsul->mehsul_kilidsoz= $request->input('mehsul_kilidsoz');
     $mehsul->mehsul_say= $request->input('mehsul_say');


    $mehsul->save();
    return view('admin.mehsullar')->with("status","YUklenme ugurla yerine yetirildi");    
    }

    public function mehsul_yenile($id, Request $request)
    {
 
     $kategori_ad=$request->kategori_ad;
     $mehsul_ad= $request->mehsul_ad;
     $mehsul_model= $request->mehsul_model;
     $mehsul_melumat= $request->mehsul_melumat;
     $mehsul_endirimqiymet= $request->mehsul_endirimqiymet;
     $mehsul_video= $request->mehsul_video;
     $mehsul_kilidsoz= $request->mehsul_kilidsoz;
     $mehsul_say= $request->mehsul_say;
     
     Mehsullar::whereId($id)->update([
        "kategori_ad"=>$kategori_ad,
        "mehsul_ad"=>$mehsul_ad,
        "mehsul_model"=>$mehsul_model,
        "mehsul_endirimqiymet"=>$mehsul_endirimqiymet,
        "mehsul_melumat"=>$mehsul_melumat,
        "mehsul_video"=>$mehsul_video,
        "mehsul_kilidsoz"=>$mehsul_kilidsoz,
        "mehsul_say"=>$mehsul_say,
        


     ]);

   
    return back()->with("status","Yenilenme ugurla yerine yetirildi");    
    }

    public function mehsulsil($id)
    {

         $mehsul=Mehsullar::find($id);
            
         $mehsul->delete();


        return back()->with("status","Silinme ugurla yerine yetirildi");
       

    } 

}
