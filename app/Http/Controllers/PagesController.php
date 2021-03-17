<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function visimisi()
    {
        return view('visimisi');
    }
    public function struktur()
    {
        return view('struktur');
    }
    public function tatatertib()
    {
        return view('tatatertib');
    }
    public function layanan()
    {
        return view('layanan');
    }
    public function galeri()
    {
        return view('galeri');
    
    }
    public function denda()
    {
        return view('denda');
    
    }
}
