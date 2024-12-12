<?php

namespace Database\Factories;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
    protected $model = Anggota::class;

    public function definition()
    {
        return [
            'nik' => $this->faker->unique()->numerify('##########'),  // 10 digit NIK
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
