<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
class BankController extends Controller
{
   
    public function bank_elavet(Request $request)
    {
     $bank= new Bank();
     $bank->bank_ad= $request->input('bank_ad');
     $bank->bank_kart_kodu= $request->input('bank_kart_kodu');
     $bank->bank_adsoyad= $request->input('bank_adsoyad');


    $bank->save();
    return view('admin.bank')->with("status","YUklenme ugurla yerine yetirildi");    
    }

    public function bank_yenile($id, Request $request)
    {
 
     $bank_ad=$request->bank_ad;
     $bank_kart_kodu= $request->bank_kart_kodu;
     $bank_adsoyad= $request->bank_adsoyad;
     Bank::whereId($id)->update([
        "bank_ad"=>$bank_ad,
        "bank_kart_kodu"=>$bank_kart_kodu,
        "bank_adsoyad"=>$bank_adsoyad,


     ]);

   
    return back()->with("status","Yenilenme ugurla yerine yetirildi");    
    }

    public function banksil($id)
    {

         $banka=Bank::find($id);
            
         $banka->delete();


        return back()->with("status","Silinme ugurla yerine yetirildi");
       

    } 

}
