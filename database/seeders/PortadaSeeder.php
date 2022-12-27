<?php

namespace Database\Seeders;

use App\Models\Portada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portada::create([
            'logo' => 'theme/assets/img/Servicios.png',

            'titulo1'=>'Fuimos creados para Brindar!',
            'titulo2'=>'SERVICIOS DE ALBAÑILERÍA',
            'fondo' => 'theme/assets/img/header-bg.png',
        ]);
    }
}
