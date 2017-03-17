<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JadwalMatakuliah;

class JadwalMatakuliahController extends Controller
{
    public function awal()
	{
		return "Hai! Greetings from JadwalMatakuliahController !";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$jadwal_matakuliah=new JadwalMatakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 1;
    	$jadwal_matakuliah->ruangan_id = 1;
    	$jadwal_matakuliah->dosen_matakuliah_id = 1;
    	$jadwal_matakuliah->save();
    	return "Data dengan ID Mahasiswa : {$jadwal_matakuliah->mahasiswa_id} telah disimpan.";
}
