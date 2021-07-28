<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Psychologist;

class PsychologistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Psychologist::factory(20)->create();
    }
}
