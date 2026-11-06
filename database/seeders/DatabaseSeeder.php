<?php

namespace Database\Seeders;

use App\Models\ServisMobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ServisMobil::factory(10)->create();

    }
}