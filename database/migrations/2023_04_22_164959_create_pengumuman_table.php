<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->integer('pengumuman_id', true);
            $table->string('pengumuman_judul');
            $table->text('pengumuman_deskripsi');
            $table->date('pengumuman_tanggal');
            $table->enum('pengumuman_status', ['aktif', 'tidak_aktif'])->default('tidak_aktif');
            $table->string('pengumuman_gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumuman');
    }
};
