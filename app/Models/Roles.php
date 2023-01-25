<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    
    protected $table = 'roles';
    //protected $primaryKey = 'codigo';
    //public $incrementing = false;
    //protected $keyType = 'string';
    public $timestamps = false; //created_at, updated_at




    public static function find($id)
    {
        return static::where('id', compact('id'))->first();
    }

//relacion de llaves donde rol pasa a ser fk
    function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_roles', 'id');
    }

    function modulo()
    {
        return $this->hasMany(Modulo::class, 'id_roles', 'id');
    }
}
