<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];
         // Insert data ke tabel pupuks
         DB::table('roles')->insert($data);
    }
}
