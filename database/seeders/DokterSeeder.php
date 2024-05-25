<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'nama' => 'ilham fahri',
                'spesialis' => 'Ahli Syaraf',
                'nomer_telepon' => '12345', // Pastikan ini sesuai dengan file migrasi
                'email' => 'ilhamfahri@gmail.com',
            ],
            [
                'nama' => 'Zulia Iza',
                'spesialis' => 'Dokter Umum',
                'nomer_telepon' => '12345', // Pastikan ini sesuai dengan file migrasi
                'email' => 'zuliaiza19@gmail.com',
            ]
        ]);
    }
}
