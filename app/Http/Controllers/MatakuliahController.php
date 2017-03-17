<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
	{
		return "Hai! Greetings from MatakuliahController !";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$matakuliah = new Matakuliah();
		$matakuliah->title='Pemrograman Berbasis Objek';
    	$matakuliah->keterangan='Matakuliah Wajib';
		$matakuliah->save();
		return "Data dengan username {$matakuliah->title} telah disimpan.";
	}
}
