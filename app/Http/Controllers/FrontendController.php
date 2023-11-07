<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mehsullar;
use App\Models\Kategori;

class FrontendController extends Controller
{
    public function kategori (){
      
        return view ('frond.shop');

    }
    public function qeydiyyat(){
        return view('frond.qeydiyyat');
    }
    public function girish(){
        return view('frond.girish');
    }
    public function about(){
        return view('frond.about');
    }

    public function bizimleelaqe(){
        return view('frond.contact');
    }

    public function sebet(){
        return view('frond.cart');
    }
    public function kategorilist($id)
    {
       $kategori=Kategori::find($id);
       $mehsul=Mehsullar::where("kategoriad", '=', $kategori->kategori_ad)->get();
       
     return view ('frond.kategorilist')->with('mehsul',$mehsul)->with('kategori' , $kategori);
 
    }
}
