<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BajuController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $baju = DB::table('baju')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('Baju/baju',['baju' => $baju]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('Baju/tambahBaju');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
        if($request->stockBaju > 0)
        $request->tersedia = "Y";
        else
        $request->tersedia = "N";
		DB::table('baju')->insert([
			'kodebaju' => $request->kodeBaju,
			'merkbaju' => $request->merkBaju,
			'stockbaju' => $request->stockBaju,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/baju');

	}

    //method untuk melihat data pegawai
    public function view($id){
        $baju = DB::table('baju')->where('kodebaju',$id)->get();
        return view('Baju/viewBaju',['baju'=> $baju]);
    }

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$baju = DB::table('baju')->where('kodebaju',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Baju/editBaju',['baju' => $baju]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if($request->stockBaju > 0)
        $request->tersedia = "Y";
        else
        $request->tersedia = "N";
		// update data pegawai
		DB::table('baju')->where('kodebaju',$request->kodeBaju)->update([
			'kodebaju' => $request->kodeBaju,
			'merkbaju' => $request->merkBaju,
			'stockbaju' => $request->stockBaju,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/baju');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('baju')->where('kodebaju',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/baju');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$baju = DB::table('baju')
		->where('merkbaju','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('Baju/baju',['baju' => $baju, 'cari' => $cari]);

	}
}
