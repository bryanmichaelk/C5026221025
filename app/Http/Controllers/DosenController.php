<?php

namespace App\Http\Controllers; //  package dalam java

use Illuminate\Http\Request; // pengganti import dalam java

class DosenController extends Controller
{
    //
    public function index(){
        $a = 8;
        $b = 5;
        $c = $a * $b;
        return "<h1> Hail Perkalian = " . $c . "</h1>";
    }
    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
    	$alamat = "Baruk Tengah";
    	$umur = 18;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
