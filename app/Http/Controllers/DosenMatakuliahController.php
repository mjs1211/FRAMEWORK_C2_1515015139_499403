<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;

class DosenMatakuliahController extends Controller
{
     public function awal()
	{
		return "Hai! Greetings from DosenMatakuliahController !";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$dosen_matakuliah = new DosenMatakuliah();
		$dosen_matakuliah ->dosen_id = 1;
    	$dosen_matakuliah ->matakuliah_id = 1;
		$dosen_matakuliah->save();
		return "Data {$dosen_matakuliah->dosen_id} telah disimpan.";
	}
}
