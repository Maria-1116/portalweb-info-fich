<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //listado de personas
    function index()
    {
        ContadorVisitas::adicionarContador();

        //variables
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    //mostrar un formulario para registro nuevo
    function create()
    {
        ContadorVisitas::adicionarContador();

        return view('persona.create');
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $persona = new Persona();
        $persona->codigo = $request->input('codigo');
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->sexo = $request->input('sexo');
        $persona->telefono = $request->input('telefono');
        $persona->correo = $request->input('correo');
        $persona->tipo = $request->input('tipo');
        
        $persona->save();


        return redirect()->route('persona.index');
    }

    //mostrar un todos en una vista
    function show($id)
    {
        ContadorVisitas::adicionarContador();

        $persona = Persona::find($id);
        return view('persona.show', compact('persona'));
    }

    //mostrar un formulario para editar un registro
    function edit($id)
    {
        ContadorVisitas::adicionarContador();
        
        $persona = Persona::find($id);
        return view('persona.edit', compact('persona'));
    }

    //actualizar los datos en la BD
    function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->codigo = $request->input('codigo');
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->sexo = $request->input('sexo');
        $persona->telefono = $request->input('telefono');
        $persona->correo = $request->input('correo');
        $persona->tipo = $request->input('tipo');
        
        $persona->save();

        return redirect()->route('persona.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('persona.index');
    }
}
