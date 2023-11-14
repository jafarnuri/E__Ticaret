<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mehsullar;
use App\Models\Kategori;
use App\Models\Rengler;
use App\Models\Size;
use App\Models\Sebet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function kategori (){
        $kategori=Kategori::get();
        $mehsul=Mehsullar::get();
        $reng=Rengler::get();
        $size=Size::get();

        return view ('frond.shop')->with('kategori',$kategori)->with('mehsul',$mehsul)->with('reng',$reng)->with('size',$size);

    }
    public function urundetay($id){
        $mehsul=Mehsullar::find($id);
        return view('frond.shop-single')->with('mehsul',$mehsul);
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


    public function kategorilist($id)
    {
       $kategori=Kategori::find($id);
       $mehsul=Mehsullar::where("kategoriad", '=', $kategori->kategoriya_ad)->get();
       $kategoriya=Kategori::get();
       $reng=Rengler::get();
       $size=Size::get();

       
     return view ('frond.kategorilist')->with('mehsul',$mehsul)->with('kategori' , $kategori)
     ->with('kategoriya' , $kategoriya) ->with('size' , $size) ->with('reng' , $reng);
    }

    public function renglist($id)
    {
        $rengler=Rengler::find($id);
        $mehsul=Mehsullar::where("mehsul_reng", '=', $rengler->reng_ad)->get();
        $kategori=Kategori::get();
        $reng=Rengler::get();
        $size=Size::get();

     return view ('frond.renglist')->with('mehsul',$mehsul)->with('kategori' , $kategori)->with('rengler' , $rengler)
     ->with('reng' , $reng)->with('size' , $size);
 
    }

    public function sizelist($id)
    {
        $sizes=Size::find($id);
        $mehsul=Mehsullar::where("mehsul_size", '=', $sizes->size_ad)->get();
        $kategori=Kategori::get();
        $reng=Rengler::get();
        $size=Size::get();

     return view ('frond.sizelist')->with('mehsul',$mehsul)->with('kategori' , $kategori)->with('sizes' , $sizes)
     ->with('reng' , $reng)->with('size' , $size);
 
    }

    public function sebet_elavet(Request $request)
    {

        $sebet=new Sebet();
        $sebet->user_id=$request->input('user_id');
        $sebet->mehsul_id=$request->input('mehsul_id');
        $sebet->mehsul_eded=$request->input('mehsul_eded');
    
        $sebet->save();

        return back()->with("status","Mehsulunuz ugurla sebete elave edildi...");
    }

    public function sebet($id)
    {
    $user=Auth::guard('web')->user()->find($id);
    $sebet=Sebet::where("user_id", '=', $user->id);
    $mehsul=Mehsullar::where("id", '=', $sebet->mehsul_id)->get();
       
     return view ('frond.cart')->with('sebet',$sebet)->with('mehsul',$mehsul);
    }

}
