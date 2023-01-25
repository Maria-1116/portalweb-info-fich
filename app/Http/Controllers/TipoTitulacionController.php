<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use App\Models\TipoTitulacion;
use Illuminate\Http\Request;

class TipoTitulacionController extends Controller
{
    function index()
    {
        ContadorVisitas::adicionarContador();

        //variables
        $tipos_titulacion = TipoTitulacion::all();
        return view('tipo_titulacion.index', compact('tipos_titulacion'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();
        
        $personas = Persona::all(); //select * from persona;
        return view('tipo_titulacion.create',compact('personas'));
    }

    function store(Request $request)
    {
        $tipo_titulacion = new TipoTitulacion();
        $tipo_titulacion->modalidad_titulacion = $request->input('modalidad_titulacion');
        $tipo_titulacion->descripcion = $request->input('descripcion');
        $tipo_titulacion->id_persona = $request->input('id_persona');
        $tipo_titulacion->save();


        return redirect()->route('tipo_titulacion.index');
    }

    function show($id)
    {
        $tipo_titulacion = TipoTitulacion::find($id);
        return view('tipo_titulacion.show', compact('tipo_titulacion'));
    }

    function edit($id)
    {
        $tipo_titulacion = TipoTitulacion::find($id);
        $personas = Persona::all(); //select * from persona;

        return view('tipo_titulacion.edit', compact('tipo_titulacion', 'personas'));
    }

    function update(Request $request, $id)
    {
        $tipo_titulacion = TipoTitulacion::find($id);
        $tipo_titulacion->modalidad_titulacion = $request->input('modalidad_titulacion');
        $tipo_titulacion->descripcion = $request->input('descripcion');
        $tipo_titulacion->id_persona = $request->input('id_persona');


        $tipo_titulacion->save();

        return redirect()->route('tipo_titulacion.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $tipo_titulacion = TipoTitulacion::find($id);
        $tipo_titulacion->delete();

        return redirect()->route('tipo_titulacion.index');
    }
}
