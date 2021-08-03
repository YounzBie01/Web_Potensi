<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBumdesMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumdes_members', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('nik');
            $table->string('jabatan');
            $table->string('kota_lahir');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('gol_dar');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->text('alamat');
            $table->text('foto_path');
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
        Schema::dropIfExists('bumdes_members');
    }
}
