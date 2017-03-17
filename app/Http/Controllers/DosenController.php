<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal()
	{
		return "Greetings from DosenController !";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$dosen = new Dosen();
    	$dosen->nama='Prof. Dr. Hj. Sukiyem, S.Kom, M.Kom';
    	$dosen->nip='198912110446';
    	$dosen->alamat='Jl. H.A.M.M. Rifaddin No. 42';
    	$dosen->pengguna_id=1;
		$dosen->save();
		return "Data dengan username {$dosen->username} telah disimpan.";
	}
}
