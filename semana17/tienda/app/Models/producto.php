<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

}
