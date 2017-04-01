<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

  public function pengguna(){
  	return $this->belongsTo(pengguna::class);
  }

  public functiom jadwal_matakuliah(){
  	return $this->hasMany(jadwal_matakuliah::class);
  }
}
