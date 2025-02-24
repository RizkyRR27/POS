<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function foodbeverage(){
        return view('foodbeverage');
    }
    public function beautyhealth(){
        return view('beautyhealth');
    }
    public function homecare(){
        return view('homecare');
    }
    public function babykid(){
        return view('babykid');
    }
}
