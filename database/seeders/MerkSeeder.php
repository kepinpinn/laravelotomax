<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merk;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merk::create([
            'merek' => 'Enkei',
        ]);

        Merk::create([
            'merek' => 'Rays',
        ]);

        Merk::create([
            'merek' => 'Work',
        ]);

        Merk::create([
            'merek' => 'Sparco',
        ]);
    }
}
