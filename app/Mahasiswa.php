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
		return this->hasMany(JadwalMatakuliah::class);
	}
}
