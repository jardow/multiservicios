<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            'titulo' => 'Ampliaciones y Remodelaciones',
            'descripcion'=>'Remodelación de viviendas, locales comerciales',
            'foto'=>'theme/assets/img/services/1.jpg',

        ]);

        Servicio::create([
            'titulo' => 'Porcelanato',
            'descripcion'=>'Instalación de porcelanato en pisos y paredes',
            'foto'=>'theme/assets/img/services/2.jpg',

        ]);

        Servicio::create([
            'titulo' => 'Pintura',
            'descripcion'=>'Pintura residencial, comercial e industrial',
            'foto'=>'theme/assets/img/services/5.jpg',

        ]);

        Servicio::create([
            'titulo' => 'Plomeria',
            'descripcion'=>'Sistemas sanitarios',
            'foto'=>'theme/assets/img/services/plomeria.jpg',

        ]);

        Servicio::create([
            'titulo' => 'Construcción de horno de Leña',
            'descripcion'=>'Construimos hornos de leña en ladrillo refractario, ladrillo prensado',
            'foto'=>'theme/assets/img/services/hornoleña.jpg',

        ]);

        Servicio::create([
            'titulo' => 'Mamposteria',
            'descripcion'=>'Construimos Muros, Cerramientos',
            'foto'=>'theme/assets/img/services/mamposteria.jpg',

        ]);
    }
}
