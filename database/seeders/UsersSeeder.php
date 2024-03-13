<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
                'nama' => 'indra',
                'username' => 'indrakebunkomunal',
                'no_hp' => '081234567891',
                'password' => Hash::make('123'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Admin',
                'username' => 'admin',
                'no_hp' => '081234567890',
                'password' => Hash::make('123'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
    
        // Insert data ke tabel pupuks
        DB::table('users')->insert($data);
    }
}
