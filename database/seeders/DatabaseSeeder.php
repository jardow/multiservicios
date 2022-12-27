<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Acercade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AcercadeSeeder::class);
        $this->call(PortadaSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(ProyectosSeeder::class);
    }
}
