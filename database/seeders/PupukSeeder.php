<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Contoh data pupuk
    $data = [
        ['jenis_pupuk' => 'Biogreenfil'],
        ['jenis_pupuk' => 'Pupuk NPK'],
        ['jenis_pupuk' => 'Belum Dipupuk'],
        // Tambahkan data pupuk lainnya sesuai kebutuhan
    ];

    // Insert data ke tabel pupuks
    DB::table('pupuk')->insert($data);
    }
}
