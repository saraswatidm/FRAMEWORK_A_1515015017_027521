<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
	public function awal() {

	return "jadwal matakuliah";
	}
	public function tambah()
{
	return $this->simpan();

}
public function simpan()
{
	$Matakuliah = new Matakuliah();
	$Matakuliah->tittle = 'framework';
	$Matakuliah->keterangan = 'selamat kamu berhasil';
    $Matakuliah->save();
    return "data dengan matakuliah {$matakuliah->tittle} dengan keterangan {$matakuliah->keterangan}telah disimpan";
}
}