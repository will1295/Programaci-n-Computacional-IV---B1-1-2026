<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'tblclientes';

    protected $fillable = [
      'nombre',
      'dui',
      'email',
      'telefono'  
    ];
}
