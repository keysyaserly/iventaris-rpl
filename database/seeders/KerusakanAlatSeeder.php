<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KerusakanAlat;

class KerusakanAlatSeeder extends Seeder
{
    public function run()
    {
        KerusakanAlat::factory(10)->create(); // Membuat 10 data kerusakan alat dummy
    }
}
