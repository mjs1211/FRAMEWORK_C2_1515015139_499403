<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal()
	{
		return "Hai! Greetings from RuanganController !";
	}

	public function tambah()
	{
		return $this->simpan();
	}

	public function simpan()
	{
		$ruangan = new Ruangan();
		$ruangan->title='Laboratorium Software Engineering';
		$ruangan->save();
		return "Data dengan ruangan {$ruangan->title} telah disimpan.";
	}
}