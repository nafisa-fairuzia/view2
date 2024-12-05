<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function tampil(){
        $arrSiswa = ["Nafisa Fairuzia", "Fadilla Airur Rozida", "Amelya Fernanda Putri", "Putri Karsilia"];
        return view('siswa')->with('siswa',$arrSiswa);
    }
    
}
