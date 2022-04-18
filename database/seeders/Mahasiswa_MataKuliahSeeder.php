<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa_MataKuliahSeeder extends Seeder
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
                'mahasiswa_id_mahasiswa' => 7,
                'matakuliah_id' => 1,
                'nilai' => 80
            ],
            [
                'mahasiswa_id_mahasiswa' => 7,
                'matakuliah_id' => 2,
                'nilai' => 92
            ],
            [
                'mahasiswa_id_mahasiswa' => 7,
                'matakuliah_id' => 3,
                'nilai' => 100
            ],
            [
                'mahasiswa_id_mahasiswa' => 7,
                'matakuliah_id' => 4,
                'nilai' => 94
            ],
            
            [
                'mahasiswa_id_mahasiswa' => 8,
                'matakuliah_id' => 1,
                'nilai' => 87
            ],
            [
                'mahasiswa_id_mahasiswa' => 8,
                'matakuliah_id' => 2,
                'nilai' => 99
            ],
            [
                'mahasiswa_id_mahasiswa' => 8,
                'matakuliah_id' => 3,
                'nilai' => 100
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}
