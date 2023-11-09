<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Sosial;
use App\Models\Baglanti;
use App\Models\Haqqimizda;
use App\Models\Kategori;
use App\Models\Bank;
use App\Models\Mehsullar;


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
    $kategori->kategoriya_ad=$request->input('kategoriya_ad');
    $kategori->save();

    return back()->with("status","Yuklenme  ugurla yerine yetirildi");

}

public function kateduzen($id ,Request $request)
{ 
    $kategori= Kategori::find($id);
    $kategori->kategoriya_ad=$request->input('kategoriya_ad');
    $kategori->update();

    return back()->with("status","Yenilenme   ugurla yerine yetirildi");

}

public function katesil($id)
{ 
    $kategori= Kategori::find($id);
    
    $kategori->delete();

    return back()->with("status","Silinme   ugurla yerine yetirildi");

}

public function bank_elavet(Request $request)
{ 
    $bank= new Bank();
    $bank->bank_ad=$request->input('bank_ad');
    $bank->bank_kart_kodu=$request->input('bank_kart_kodu');
    $bank->bank_adsoyad=$request->input('bank_adsoyad');
    $bank->save();

    return back()->with("status","Yuklenme  ugurla yerine yetirildi");

}

public function bank_yenile($id ,Request $request)
{ 
    $bank= Bank::find($id);
    $bank->bank_ad=$request->input('bank_ad');
    $bank->bank_kart_kodu=$request->input('bank_kart_kodu');
    $bank->bank_adsoyad=$request->input('bank_adsoyad');
    $bank->update();

    return back()->with("status","Yenilenme   ugurla yerine yetirildi");

}

public function banksil($id)
{ 
    $bank= Bank::find($id);
    
    $bank->delete();

    return back()->with("status","Silinme   ugurla yerine yetirildi");

}


public function mehsul_elavet(Request $request)
{ 
  $imagename='';
if($image=$request->file('mehsul_resm')){
    $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
    $image->move('dimg/mehsullar',$imagename);

}
    $mehsul= new Mehsullar();
    $mehsul->kategoriad=$request->input('kategoriad');
    $mehsul->mehsul_ad=$request->input('mehsul_ad');
    $mehsul->mehsul_reng=$request->input('mehsul_reng');
    $mehsul->mehsul_olcu=$request->input('mehsul_olcu');
    $mehsul->mehsul_melumat=$request->input('mehsul_melumat');
    $mehsul->mehsul_endirim_tarix=$request->input('mehsul_endirim_tarix');
    $mehsul->mehsul_model=$request->input('mehsul_model');
    $mehsul->mehsul_size=$request->input('mehsul_size');
  
    $mehsul->mehsul_resm=$imagename;
    $mehsul->mehsul_endirimqiymet=$request->input('mehsul_endirimqiymet');
    $mehsul->mehsul_qiymet=$request->input('mehsul_qiymet');
    $mehsul->mehsul_say=$request->input('mehsul_say');
    $mehsul->save();

    return back()->with("status","Yuklenme  ugurla yerine yetirildi");

}

public function mehsul_yenile($id ,Request $request)
{ 
    $mehsul= Mehsullar::find($id);
    $mehsul->kategoriad=$request->input('kategoriad');
    $mehsul->mehsul_ad=$request->input('mehsul_ad');
    $mehsul->mehsul_reng=$request->input('mehsul_reng');
    $mehsul->mehsul_olcu=$request->input('mehsul_olcu');
    $mehsul->mehsul_melumat=$request->input('mehsul_melumat');
    $mehsul->mehsul_endirim_tarix=$request->input('mehsul_endirim_tarix');
    $mehsul->mehsul_model=$request->input('mehsul_model');
    $mehsul->mehsul_size=$request->input('mehsul_size');
    $mehsul->mehsul_endirimqiymet=$request->input('mehsul_endirimqiymet');
    $mehsul->mehsul_qiymet=$request->input('mehsul_qiymet');
    $mehsul->mehsul_say=$request->input('mehsul_say');
    
    if($request->hasfile('mehsul_resm'))
    {
       $deleteOldImage='dimg/mehsullar/'.$mehsul->mehsul_resm;
       if(File::exists($deleteOldImage))
      {
        File::delete($deleteOldImage);
      }
      $image=$request->file('mehsul_resm');
      $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
      $image->move('dimg/mehsullar',$imagename);
      $mehsul ->mehsul_resm = $imagename;

    }
  
    $mehsul->update();

    return back()->with("status","Yenilenme   ugurla yerine yetirildi");

}

public function mehsulsil($id)
{ 
    $mehsul= Mehsullar::find($id);
    $deleteOldImage='dimg/mehsullar/'.$mehsul->mehsul_resm;
    if(File::exists($deleteOldImage))
   {
     File::delete($deleteOldImage);
   }
    $mehsul->delete();
    
  

    return back()->with("status","Silinme   ugurla yerine yetirildi");

}
}
