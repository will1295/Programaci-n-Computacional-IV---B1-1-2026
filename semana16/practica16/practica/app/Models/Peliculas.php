<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'table_peliculas';
    protected $fillable = [
        'nombre',
        'duracion',
        'categoria',
        'fechaestreno'
    ];
}
