<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function Dosen(){
		return this->belongsTo(Dosen::class);
	}

	public function JadwalMatakuliah(){
		return this->hasMany(JadwalMatakuliah::class);
	}

	public function Matakuliah(){
		return this->belongsTo(Matakuliah::class);
	}

	public function listDosenDanMatakuliah()
    {
    	$out = [];
    	foreach ($this ->all() as $dsnMtk) {
    		$out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->title})";
    	}
    	return $out;
    }

    public function getNamaDosenAttribute(){
        return $this->dosen->nama;
    }

    public function getNipDosenAttribute(){
        return $this->dosen->nim();
    }

    public function getTitleMatakuliahAtribute(){
        return $this->matakuliah->title;
    }
}
