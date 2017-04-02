<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    
	protected $table = 'ruangan';
    protected $fillable = ['title'];

    public function JadwalMatakuliah(){
    	return this->hasMany(JadwalMatakuliah::class);
    }
    
}
