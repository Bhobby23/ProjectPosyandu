<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kader;
use App\Models\Anggota;
use App\Models\Laporan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // // Membuat 10 data Kader
        Kader::factory()->count(5)->create();

        // Membuat 20 data Anggota
        Anggota::factory()->count(20)->create();

        // // Membuat 50 data Laporan
        Laporan::factory()->count(10)->create();
    }
}
