<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanFrontendController extends Controller
{
    //
    public function beranda(){
        return view('frontend.beranda',[
            'title' => 'Beranda'
        ]);
    }

    public function profile(){
        return view('frontend.profile',[
            'title' => 'Profile'
        ]);
    }

    public function program(){
        return view('frontend.program',[
            'title' => 'Program'
        ]);
    }

    //layanan
    public function layanan(){
        return view('frontend.layanan',[
            'title' => 'Layanan'
        ]);
    }

    public function layananWeb(){
        return view('detaillayanan.detailweb',[
            'title' => 'Layanan Website'
        ]);
    }


    public function galeri(){
        return view('frontend.galeri',[
            'title' => 'Galeri'
        ]);
    }

    public function produkJasa(){
        return view('frontend.produkjasa',[
            'title' => 'Produk-jasa'
        ]);
    }

    public function berita(){
        return view('frontend.berita',[
            'title' => 'Berita'
        ]);
    }
}
