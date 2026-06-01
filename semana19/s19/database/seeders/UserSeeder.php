<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuarios::create([
            'nombre'=>'Pepito',
            'correo'=>'correo@correo.com',
            'dui'=>121132123132
        ]);
    }
}
