<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use App\Models\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
    function index()
    {
        ContadorVisitas::adicionarContador();
        
        //variables
        $tesiss = Tesis::all();
        return view('tesis.index', compact('tesiss'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();
        
        $personas = Persona::all(); //select * from persona;
        return view('tesis.create', compact('personas' ));
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $tesis = new Tesis();
        $tesis->codigo = $request->input('codigo');
        $tesis->nombre = $request->input('nombre');
        $tesis->fecha_defensa = $request->input('fecha_defensa');
        $tesis->autor = $request->input('autor');
        $tesis->jurados = $request->input('jurados');
        $tesis->url = $request->input('url');
        $tesis->id_persona = $request->input('id_persona');
        $tesis->save();


        return redirect()->route('tesis.index');
    }

    //mostrar un todos en una vista
    function show($id)
    {
        $tesis = Tesis::find($id);
        return view('tesis.show', compact('tesis'));
    }

    //mostrar un formulario para editar un registro
    function edit($id)
    {
        $tesis = Tesis::find($id);
        $personas = Persona::all(); //select * from persona;

        return view('tesis.edit', compact('tesis', 'personas'));
    }

    //actualizar los datos en la BD
    function update(Request $request, $id)
    {
        $tesis = Tesis::find($id);
        $tesis->codigo = $request->input('codigo');
        $tesis->nombre = $request->input('nombre');
        $tesis->fecha_defensa = $request->input('fecha_defensa');
        $tesis->autor = $request->input('autor');
        $tesis->jurados = $request->input('jurados');
        $tesis->url = $request->input('url');
        $tesis->id_persona = $request->input('id_persona');


        $tesis->save();

        return redirect()->route('tesis.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $tesis = Tesis::find($id);
        $tesis->delete();

        return redirect()->route('tesis.index');
    }
}
