<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create([
            'foto' => 'theme/assets/img/team/1.jpg',
            'nombres'=>'Espacio Nombre',
            'habilidad'=>'Espacio Habilidad',
            'mensaje' => 'Hola, necesito más información acerca de los servicios que brindan.',
            'contacto' => '0984243670',
        ]);

        Equipo::create([
            'foto' => 'theme/assets/img/team/2.jpg',
            'nombres'=>'Espacio Nombre',
            'habilidad'=>'Espacio Habilidad',
            'mensaje' => 'Hola, necesito más información acerca de los servicios que brindan.',
            'contacto' => '0984243670',
        ]);

        Equipo::create([
            'foto' => 'theme/assets/img/team/3.jpg',
            'nombres'=>'Espacio Nombre',
            'habilidad'=>'Espacio Habilidad',
            'mensaje' => 'Hola, necesito más información acerca de los servicios que brindan.',
            'contacto' => '0984243670',
        ]);
    }
}
