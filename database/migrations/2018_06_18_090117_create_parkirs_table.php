<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkirs', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jenis_kendaraan',['motor','mobil','lainnya']);
            $table->string('plat_nomor');
            $table->string('nama_kendaraan');
            $table->datetime('jam_keluar')->nullable();
            $table->string('nama_pemilik');
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
        Schema::dropIfExists('parkirs');
    }
}
