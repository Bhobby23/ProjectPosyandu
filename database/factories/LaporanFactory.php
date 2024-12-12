<?php

namespace Database\Factories;

use App\Models\Laporan;
use App\Models\Kader;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanFactory extends Factory
{
    protected $model = Laporan::class;

    public function definition()
    {
        return [
            'nik' => Anggota::inRandomOrder()->first()->nik,
            'id_kader' => Kader::inRandomOrder()->first()->id_kader,
            'tanggal' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
