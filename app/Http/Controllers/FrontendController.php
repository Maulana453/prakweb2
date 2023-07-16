<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class FrontendController extends Controller
{
    public function home(){
        $produk = new Produk();
        return view('frontend/home/home', ['produk'=> $produk->getAllData()]);
    }

    public function about(){
        return view('frontend/home/about');
    }
    
    public function contact(){
        return view('frontend/home/contact');
    }
    public function smartwatch(){
        return view('frontend/jenis/smartwatch');
    }

    public function automatic(){
        return view('frontend/jenis/automatic');
    }

    public function chronograph(){
        return view('frontend/jenis/chronograph');
    }

    public function digital(){
        return view('frontend/jenis/digital');
    }

    public function quartz(){
        return view('frontend/jenis/quartz');
    }
}
