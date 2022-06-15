<?php

namespace Database\Seeders;

use App\Models\table_kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        table_kelas::create([
            'kelas' => 'sistem informasi',
            'wali_kelas' => 'horriyah',
            'ketua_kelas' => 'fahmi',
            'jumlah_siswa' => 12,
        ]);
    }
}
