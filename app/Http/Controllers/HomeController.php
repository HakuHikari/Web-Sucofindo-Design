<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }
     public function struktur()
    {
        return view('struktur');
    }
    public function artilogo()
    {
        return view('artilogo');
    }
    public function layanan()
    {
        return view('layanan');
    }
    public function galeri(){
        return view('galeri');
    }
}
