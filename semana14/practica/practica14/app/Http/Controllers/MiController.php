<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{

    public function index(){
        /*
            Crear tres variables,
            Una que guarde su nombre, otra
            que guarde su fecha de nacimiento
            y una tercera que sea un arreglo con
            el nombre de sus comidas favoritas
        */
            // 1-La view que queremos retornar
            // 2-La informacion que queremos mostrar
            $nombre = "Juanito Perez";
            return view('pagina',compact('nombre'));
    }

    private $cereales = [['id'=>1,'nombre'=>'zucaritas','precio'=>'2.50'],
        ['id'=>2,'nombre'=>'choco crispis','precio'=>'2.70']];

    /*public function catalogo(){

        $cereales = $this->$cereales;
        //Crear otro arreglo asociativo con 5 elementos
        //y tres campos con el id incluido
        return view('cereales',compact('cereales'));
    }*/

    public function ver($id){
        $cereal = collect($this->cereales)->firstWhere('id',$id);
        return view ('cereal',compact('cereal'));

    }

}
