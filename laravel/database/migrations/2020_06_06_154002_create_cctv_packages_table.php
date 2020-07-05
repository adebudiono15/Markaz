<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCctvPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cctv_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paket_kamera');
            $table->integer('photo');
            $table->string('merk_dvr');
            $table->string('unit_kamera');
            $table->string('hdd');
            $table->string('kabel');
            $table->string('kapasitas_psu');
            $table->string('kabel_connector');
            $table->string('tombol_wa');
            $table->SoftDeletes();
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
        Schema::dropIfExists('cctv_packages');
    }
}
