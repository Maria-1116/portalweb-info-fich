<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;
    protected $table = 'convenio';
    //protected $primaryKey = 'codigo';
    //public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false; //created_at, updated_at




    public static function find($id)
    {
        return static::where('id', compact('id'))->first();
    }
    
// llave fk de persona
    function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'codigo');
    }
}
