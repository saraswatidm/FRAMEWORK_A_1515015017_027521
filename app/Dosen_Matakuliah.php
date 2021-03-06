<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table ='dosen_matakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];

    public function dosen(){
    	return $this->belongsTo(dosen::class);
    }
public function jadwal_matakuliah(){
	return $this->HasMany(jadwal_matakuliah::class);
}
public function matakuliah(){
	return $this->belongsTo(matakuliah::class);
}
}
