<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Produk;
use App\Models\Beranda;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Industri;
use App\Models\Keunggulan;
use App\Models\Organisasi;
use Illuminate\Http\Request;

class TampilanFrontendController extends Controller
{
    //
    public function beranda()
    {
        $data = [
            'visi'  => Visi::with('misis')->get(),
            'misi'  => Misi::with('visi')->get(),
            'keunggulan' => Keunggulan::all(),
            'landing' => Beranda::first(), // ini untuk ambil data beranda (judul, pekat, logo)
            'title' => 'Beranda',
        ];
        return view('frontend.beranda', $data);
    }


    public function profile()
    {
        return view('frontend.profile', [
            'profile' => Profile::first(), // ambil satu data profil dari tabel
            'organisasis' => Organisasi::latest()->paginate(3),
            'industri' => Industri::all(),
            'title' => 'Profile'
        ]);
    }


    public function program(){
        $programs = Program::latest()->take(3)->get();
        return view('frontend.program', compact('programs'),[
            'title' => 'Program'
        ]);
    }

    //layanan

    public function perusahaandetail(){
        return view('detail.detailperusahaan',[
            'title' => 'Profil Perusahaan'
        ]);
    }


    public function galeri(){
        $galeri = Galeri::latest()->take(4)->get();
        return view('frontend.galeri', compact('galeri'),[
            'title' => 'Galeri'
        ]);
    }

    public function produkJasa(){
        $produks = Produk::with('gambars')->latest()->take(3)->get();
        return view('frontend.produkjasa' ,compact('produks'),[
            'title' => 'Produk-jasa'
        ]);
    }

    public function berita(){
        $beritas = Berita::with('user')->latest()->get();
        return view('frontend.berita', compact('beritas'),[
            'title' => 'Berita'
        ]);
    }

    public function kontak(){
        return view('frontend.kontak',[
            'title' => 'Kontak',
            'kontaks' => Kontak::first(),
        ]);
    }
}
