<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function awal() {
   
   return "ciwiwi";
	}
	public function tambah()
{
return $this->simpan();

}
public function simpan()
{
	
	$Mahasiswa = new Mahasiswa();
	$Mahasiswa->nama = 'Saraswati Daranada';
	$Mahasiswa->nip = '1515015017';
	$Mahasiswa->alamat = 'samarinda sebrang';
	$Mahasiswa->pengguna_id = '2';
	$Mahasiswa->save();
	return "data dengan mahasiswa {$Mahasiswa->nama} telah disimpan";
}
}
