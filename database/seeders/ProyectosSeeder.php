<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyecto::create([
            'titulo' => 'REMODELACIÓN DE LOCAL COMERCIAL',
            'ciudad'=>'Sangolqui - Ecuador',
            'descripcion'=>'Instalación de Porcenato - Pintura - Adecuaciones de instalaciones Sanitarias',
            'foto1'=>'theme/assets/img/portfolio/1.jpg',
            'foto2' => 'theme/assets/img/portfolio/2.jpg',
            'foto3' => 'theme/assets/img/portfolio/3.jpg',
            'foto4' => 'theme/assets/img/portfolio/4.jpg',
            'foto5' => 'theme/assets/img/portfolio/5.jpg',
            'foto6' => 'theme/assets/img/portfolio/6.jpg',
        ]);

        Proyecto::create([
            'titulo' => 'CONSTRUCCIÓN PROYECTO OBRA NEGRA / GRIS',
            'ciudad'=>'Alangasí - Ecuador',
            'descripcion'=>'Muros - Losas - tuberias Sanitarias - Instalacion de agua - Manposteria',
            'foto1'=>'theme/assets/img/portfolio/4.jpg',
            'foto2' => 'theme/assets/img/portfolio/5.jpg',
            'foto3' => 'theme/assets/img/portfolio/6.jpg',
            'foto4' => 'theme/assets/img/portfolio/7.jpg',
            'foto5' => 'theme/assets/img/portfolio/1.jpg',
            'foto6' => 'theme/assets/img/portfolio/2.jpg',
        ]);
    }
}
