<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Convenio;
use App\Models\Persona;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    function index()
    {
        //variables
        ContadorVisitas::adicionarContador();

        $convenios = Convenio::all();
        return view('convenio.index', compact('convenios'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();

        $personas = Persona::all(); //select * from persona;
        return view('convenio.create', compact('personas' ));
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $convenio = new Convenio();
        $convenio->descripcion = $request->input('descripcion');
        $convenio->institucion = $request->input('institucion');
        $convenio->area = $request->input('area');
        $convenio->duracion = $request->input('duracion');
        $convenio->requisitos = $request->input('requisitos');
        $convenio->url = $request->input('url');
        $convenio->id_persona = $request->input('id_persona');
        
        $convenio->save();


        return redirect()->route('convenio.index');
    }

    function show($id)
    {
        ContadorVisitas::adicionarContador();

        $convenio = Convenio::find($id);
        return view('convenio.show', compact('convenio'));
    }

    function edit($id)
    {
        ContadorVisitas::adicionarContador();
        
        $convenio = Convenio::find($id);
        $personas = Persona::all(); //select * from persona;

        return view('convenio.edit', compact('convenio', 'personas'));
    }

    function update(Request $request, $id)
    {
        $convenio = Convenio::find($id);
        $convenio->descripcion = $request->input('descripcion');
        $convenio->institucion = $request->input('institucion');
        $convenio->area = $request->input('area');
        $convenio->duracion = $request->input('duracion');
        $convenio->requisitos = $request->input('requisitos');
        $convenio->url = $request->input('url');
        $convenio->id_persona = $request->input('id_persona');


        $convenio->save();

        return redirect()->route('convenio.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $convenio = Convenio::find($id);
        $convenio->delete();

        return redirect()->route('convenio.index');
    }
}
