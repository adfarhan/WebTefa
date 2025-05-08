<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class TampilanAdminController extends Controller
{
    //beranda-utama
    public function beradautamaAdmin(){
        return view('backend.berandautama.beranda',[
            'title' => 'Beranda-Utama'
        ]);
    }

    //berandaa
    public function berandaAdmin() {
        return view('backend.beranda.berandaAdmin', [
            'title' => 'Beranda'
        ]);
    }

    public function visimisi()
    {
        $data = [
            'title' => 'Visi & Misi',
            'visi'  => Visi::with('misis')->get(), // Load misi langsung lewat relasi
            'misi'  => Misi::with('visi')->get(),  // Load visi dalam misi
        ];

        return view('backend.beranda.misidanvisi', $data);
    }

    public function keunggulanBeranda() {
        return view('backend.beranda.keunggulan', [
            'title' => 'Beranda'
        ]);
    }
    //end



    //profile
    public function profileAdmin() {
        return view('backend.profile.profileAdmin', [
            'title' => 'Profile'
        ]);
    }

    public function ptProfile(){
        return view('backend.profile.pt',[
            'title' => 'Perusahaan'
        ]);
    }
    //end

    //program
    public function programAdmin() {
        return view('backend.program.programAdmin', [
            'title' => 'Program'
        ]);
    }

    //end

    //layanan
    public function layananAdmin() {
        return view('backend.layanan.layananAdmin', [
            'title' => 'Layanan'
        ]);
    }

    public function portoLayanan() {
        return view('backend.layanan.portofolio', [
            'title' => 'Portofolio'
        ]);
    }

    public function testiLayanan() {
        return view('backend.layanan.testimoni', [
            'title' => 'Testimoni'
        ]);
    }
    //end

    //produk & jasa
    public function prodanjasaAdmin() {
        return view('backend.proja.projaAdmin', [
            'title' => 'Produk & Jasa'
        ]);
    }
    //end

    //galeri
    public function galeriAdmin() {
        return view('backend.galeri.galeriAdmin', [
            'title' => 'Galeri'
        ]);
    }
    //end

    //berita
    public function beritaAdmin() {
        return view('backend.berita.beritaAdmin', [
            'title' => 'Berita'
        ]);
    }

    //end

    //profileadmin
    public function prouser() {
        return view('auth.profil', [
            'title' => 'Profile-admin'
        ]);
    }


}
