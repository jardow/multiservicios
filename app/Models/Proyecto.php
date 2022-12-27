<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $fillable = [
        'titulo',
        'descripcion',
        'ciudad',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'foto6',


    ];
}
