<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Sosial;
use App\Models\Baglanti;
use App\Models\Haqqimizda;
use App\Models\Kategori;

use Illuminate\Support\Facades\File;

class AyarController extends Controller
{
 public function genelayaryenile( Request $request){


    $ayarlar=Ayarlar::first();
    $ayarlar->ayar_bashliq=$request->input('ayar_bashliq');
    $ayarlar->ayar_achiqlamas=$request->input('ayar_achiqlamas');
    $ayarlar->ayar_kilidsoz=$request->input('ayar_kilidsoz');
    $ayarlar->ayar_yazar=$request->input('ayar_yazar');
    $ayarlar->update();



    return back()->with("status","Yenilenme ugurla yerine yetirildi ");

 }

 public function logoyenile(Request $request)
 {
         $ayarlar=Ayarlar::first();
         if($request->hasfile('ayar_logo'))
         {
            $deleteOldImage='dimg/logo/'.$ayarlar->ayar_logo;
            if(File::exists($deleteOldImage))
           {
             File::delete($deleteOldImage);
           }
           $image=$request->file('ayar_logo');
           $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
           $image->move('dimg/logo',$imagename);
           $ayarlar ->ayar_logo = $imagename;
 
         }
         
         $ayarlar->update();
         
       return back()->with("status","Yenilenme ugurla yerine yetirildi");
    

 }

 public function resimyenile (Request $request)
 {
         $ayarlar=Ayarlar::first();
         if($request->hasfile('ayar_resim'))
         {
            $deleteOldImage='dimg/resim/'.$ayarlar->ayar_resim;
            if(File::exists($deleteOldImage))
           {
             File::delete($deleteOldImage);
           }
           $image=$request->file('ayar_resim');
           $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
           $image->move('dimg/resim',$imagename);
           $ayarlar ->ayar_resim = $imagename;
 
         }
         
         $ayarlar->update();
         
       return back()->with("status","Yenilenme ugurla yerine yetirildi");
    

 }

 public function sosialyenile( Request $request){


   $sosial=Sosial::first();
   $sosial->sosial_facebook=$request->input('sosial_facebook');
   $sosial->sosial_twitter=$request->input('sosial_twitter');
   $sosial->sosial_instagram=$request->input('sosial_instagram');
   $sosial->sosial_youtube=$request->input('sosial_youtube');
   $sosial->update();



   return back()->with("status","Yenilenme ugurla yerine yetirildi ");

}

public function baglantiyenile( Request $request){


   $baglanti=Baglanti::first();
   $baglanti->baglanti_tel=$request->input('baglanti_tel');
   $baglanti->baglanti_gsm=$request->input('baglanti_gsm');
   $baglanti->baglanti_faks=$request->input('baglanti_faks');
   $baglanti->baglanti_mail=$request->input('baglanti_mail');
   $baglanti->baglanti_olke=$request->input('baglanti_olke');
   $baglanti->baglanti_sheher=$request->input('baglanti_sheher');
   $baglanti->baglanti_adres=$request->input('baglanti_adres');
   $baglanti->baglanti_isvaxti=$request->input('baglanti_isvaxti');
   $baglanti->update();



   return back()->with("status","Yenilenme ugurla yerine yetirildi ");

}

public function haqqimizdayenile(Request $request)
{ 
    $haqqimizda=Haqqimizda::first();
    $haqqimizda->haqqimizda_baslik=$request->input('haqqimizda_baslik');
    $haqqimizda->haqqimizda_umumi=$request->input('haqqimizda_umumi');
    $haqqimizda->haqqimizda_vidio=$request->input('haqqimizda_vidio');
    $haqqimizda->update();

    return back()->with("status","Yenilenme ugurla yerine yetirildi");

}

public function haqqimizdalogo(Request $request)
{
        $haqqimizda=Haqqimizda::first();
        if($request->hasfile('haqqimizda_logo'))
        {
           $deleteOldImage='dimg/logo/'.$haqqimizda->haqqimizda_logo;
           if(File::exists($deleteOldImage))
          {
            File::delete($deleteOldImage);
          }
          $image=$request->file('haqqimizda_logo');
          $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
          $image->move('dimg/logo',$imagename);
          $haqqimizda ->haqqimizda_logo = $imagename;

        }
        
        $haqqimizda->update();
        
      return back()->with("status","Yenilenme ugurla yerine yetirildi");
   

}
public function kategorielaveet(Request $request)
{ 
    $kategori= new Kategori();
    $kategori->kategoriad=$request->input('kategoriad');
    $kategori->save();

    return back()->with("status","Yuklenme  ugurla yerine yetirildi");

}

public function kateduzen($id ,Request $request)
{ 
    $kategori= Kategori::all()->find($id);
    $kategori->kategoriad=$request->input('kategoriad');
    $kategori->update();

    return back()->with("status","Yuklenme  ugurla yerine yetirildi");

}


}
