<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
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
	$dosen = new Dosen();
	$dosen->nama = 'Saraswati Daranada';
	$dosen->nip = '1515015017';
	$dosen->alamat = 'samarinda sebrang';
	$dosen->pengguna_id= '2';
	$dosen->save();
	return "data dengan dosen {$dosen->nama} tela disimpan";
}
}
