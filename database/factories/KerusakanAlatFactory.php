<?php

namespace Database\Factories;

use App\Models\KerusakanAlat;
use Illuminate\Database\Eloquent\Factories\Factory;

class KerusakanAlatFactory extends Factory
{
    protected $model = KerusakanAlat::class;

    public function definition()
    {
        return [
            'nama_alat' => $this->faker->word,
            'spesifikasi' => $this->faker->sentence,
            'jumlah' => $this->faker->numberBetween(1, 100),
            'keterangan' => $this->faker->paragraph,
        ];
    }
}
