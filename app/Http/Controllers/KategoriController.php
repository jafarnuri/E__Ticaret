<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriController extends Controller
{
    public function kategori_elavet(Request $request)
    {
    $kategori=new Kategori();
    $kategori->kategori_ad=$request->input('kategori_ad');
    $kategori->kategori_ust=$request->input('kategori_ust');
    $kategori->kategori_seourl=$request->input('kategori_seourl');
    $kategori->kategori_sira=$request->input('kategori_sira');

    $kategori->save();
    return view ('admin.kategoriyalar')->with("status","Yukleme ugurla yerine yetirildi... ");

    }

    public function kategori_yenile($id, Request $request)
    {

    $kategori_ad=$request->kategori_ad;
    $kategori_ust=$request->kategori_ust;
    $kategori_seourl=$request->kategori_seourl;
    $kategori_sira=$request->kategori_sira;

    Kategori::whereId($id)->update([
        "kategori_ad"=>$kategori_ad,
        "kategori_ust"=>$kategori_ust,
        "kategori_seourl"=>$kategori_seourl,
        "kategori_sira"=>$kategori_sira,


    ]);
    return back ()->with("status","Yenilenme ugurla yerine yetirildi... ");

    }

    public function kategori_sil($id){

        $kategori=Kategori::find($id);
        $kategori->delete();

        return back()->with("status","Silinme ugurla yerine yetirildi");
    }
}
