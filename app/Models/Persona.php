<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;



// funcion para buscar
    public static function find($id)
    {
        return static::where('codigo', compact('id'))->first();
    }
//relacion de llaves donde id persona pasa a ser fk

    function usuario()
    {
        return $this->hasOne(Usuario::class, 'id_persona', 'codigo');
    }

    function convenio()
    {
        return $this->hasOne(Convenio::class, 'id_persona', 'codigo');
    }
    
    function dato_carrera()
    {
        return $this->hasOne(DatoCarrera::class, 'id_persona', 'codigo');
    }

    function tesis()
    {
        return $this->hasOne(Tesis::class, 'id_persona', 'codigo');
    }

    function tipo_titulacion()
    {
        return $this->hasOne(TipoTitulacion::class, 'id_persona', 'codigo');
    }

    function solicitud_reclamo()
    {
        return $this->hasOne(SolicitudReclamo::class, 'id_persona', 'codigo');
    }

}
