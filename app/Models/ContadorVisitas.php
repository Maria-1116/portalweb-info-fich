<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class 
ContadorVisitas extends Model
{
    use HasFactory;

    protected $table = 'contador_visitas';

    public $timestamps = false;

    public static function adicionarContador(){
        $tabla = ContadorVisitas::find(1);
        $tabla->contador = $tabla->contador + 1;
        $tabla->save();
    }

    public static function cantidad(){
        $tabla = ContadorVisitas::find(1);
        return $tabla->contador;
    }
}
