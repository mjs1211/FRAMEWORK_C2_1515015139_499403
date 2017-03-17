<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
	{
		return "Greetings from MahasiswaController";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nama='Muhammad Jodi Saputra';
		$mahasiswa->nim='1515015139';
		$mahasiswa->alamat='Jl. K.H.A. Muksin No. 02 RT. 25';
		$mahasiswa->pengguna_id=10001;
		$mahasiswa->save();
		return "Data dengan nama {$mahasiswa->nama} telah disimpan.";
	}
}
