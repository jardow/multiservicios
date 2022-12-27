<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acercade extends Model
{
    use HasFactory;
    protected $table = 'acercades';

    protected $fillable = [
        'acercade',
        'foto1',
        'mision',
        'foto2',
        'vision',
        'foto3',
        'valores',
        'foto4',

    ];
}
