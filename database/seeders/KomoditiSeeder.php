<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomoditiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Contoh data komoditi
       $data = [
        ['nama_komoditi' => 'Cabai', 'jenis_komoditi' => 'tumbuhan', 'created_at' => now(), 'updated_at' => now()],
        ['nama_komoditi' => 'Jagung', 'jenis_komoditi' => 'tumbuhan', 'created_at' => now(), 'updated_at' => now()],
        ['nama_komoditi' => 'Nila', 'jenis_komoditi' => 'hewan', 'created_at' => now(), 'updated_at' => now()],
        ['nama_komoditi' => 'Ayam', 'jenis_komoditi' => 'hewan', 'created_at' => now(), 'updated_at' => now()],
        // Tambahkan data komoditi lainnya sesuai kebutuhan
    ];

    // Insert data ke tabel komoditis
    DB::table('komoditi')->insert($data);
    }
}
