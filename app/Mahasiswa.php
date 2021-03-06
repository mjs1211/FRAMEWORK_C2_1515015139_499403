<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function Pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

    public function JadwalMatakuliah(){
		return $this->hasMany(JadwalMatakuliah::class);
	}

    public function ListMahasiswaDanNim()
    {
    	$out = [];
    	foreach ($this ->all() as $mhs) {
    		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    	}
    	return $out;
    }

    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }
}
