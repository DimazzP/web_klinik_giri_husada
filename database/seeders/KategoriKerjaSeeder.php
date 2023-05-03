<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_kerja')->insert([
            [
                'jenis_layanan' => '',
                'jenis_layanan' => 'Umum',
                'jenis_iddokter' => 1,
            ],

        ]);
    }
}
