<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'titulo1',
        'titulo2',
        'fondo',
     
    ];
    protected $table = 'portadas';
}
