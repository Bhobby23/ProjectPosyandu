<?php

namespace Database\Factories;

use App\Models\Kader;
use Illuminate\Database\Eloquent\Factories\Factory;

class KaderFactory extends Factory
{
    protected $model = Kader::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
