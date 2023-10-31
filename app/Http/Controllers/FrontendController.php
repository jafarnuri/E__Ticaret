<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
