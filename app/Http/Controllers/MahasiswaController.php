<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$mahasiswa = DB::table('mahasiswa')->get();
    	// mengirim data pegawai ke view index
		return view('Mahasiswa/index',['mahasiswa' => $mahasiswa]);

	}


    //method untuk melihat data pegawai
    public function view($id){
        $mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
        return view('Mahasiswa/view',['mahasiswa'=> $mahasiswa]);
    }

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Mahasiswa/edit',['mahasiswa' => $mahasiswa]);

	}

	// update data pegawai
	public function update(Request $request)
	{

		DB::table('mahasiswa')->where('NRP',$request->nrp)->update([
			'NRP' => $request->nrp,
			'Nama' => $request->nama,
			'Jurusan' => $request->jurusan,
			'IPK' => $request->ipk
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}


}
