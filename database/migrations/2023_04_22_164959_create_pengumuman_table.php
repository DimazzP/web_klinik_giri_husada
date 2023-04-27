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
            $table->dateTime('pengumuman_tanggal');
            $table->string('pengumuman_judul', 100);
            $table->string('pengumuman_gambar', 50);
            $table->text('pengumuman_deskripsi');
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
