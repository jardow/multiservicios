<?php

namespace Database\Seeders;

use App\Models\Acercade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcercadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acercade::create([
            'acercade' => 'Buscamos satisfacer las necesidades de Construcción
             y remodelación de cada uno de nuestros clientes en la ciudad de Quito.',
             'foto1'=>'theme/assets/img/about/1.jpg',
            'mision'=>'Nos encontramos trabajando en la ciudad de Quito desde el año XXXX.
             Nuestra meta es ofrecer un servicio de calidad en áreas de construcción,
              remodelación, instalación de servicios básicos y suministros para empresas,
              industrias y zonas residenciales',
              'foto2'=>'/theme/assets/img/about/2.jpg',
            'vision'=>'Convertirnos en una de las entidades líderes en la construcción a nivel
             nacional, con las mejores ofertas y un servicio de calidad que supere
             las expectativas más altas.',
             'foto3'=>'/theme/assets/img/about/3.jpg',
            'valores'=>'
            Integridad, honestidad, compromiso y responsabilidad - Satisfacción de nuestros clientes - Trabajo en equipo - Profesionalismo',


            'foto4'=>'/theme/assets/img/about/4.jpg',
        ]);
    }
}
