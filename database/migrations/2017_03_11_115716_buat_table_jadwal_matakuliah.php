<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id,false,true');
            $table->foreign('mahasiswa_id')->references('id')->on('
                mahasiswa')onDelete('casecade')->onUpgrade('cascade');
            $table->integer('ruangan-id',false,true);
            $table->foreign('dosen_matakuliah')->references('id')->on('ruangan-id'
                ->onDelete)('casecade')->onUpdate('casecade');
                $table->integer('dosen_matakuliah',fasle,true);
                $table->foreign('dosen_matakuliah')->references('id')-on('
                    dosen_matakuliah')->onDelete('casecade')->onUpdate('
                    cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwal_matakuliah');
    }
}
