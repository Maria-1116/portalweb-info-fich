<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use App\Models\SolicitudReclamo;
use Illuminate\Http\Request;

class SolicitudReclamoController extends Controller
{
    function index()
    {
        ContadorVisitas::adicionarContador();
        
        if (auth()->user()->persona->tipo === 'EST') {
            $id_persona = auth()->user()->id_persona;
            $solicitud_reclamos = SolicitudReclamo::where('id_persona', $id_persona)->get();
        } else {
            $solicitud_reclamos = SolicitudReclamo::all();
        }

        return view('solicitud_reclamo.index', compact('solicitud_reclamos'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();
        
        $personas = Persona::all(); //select * from persona;

        return view('solicitud_reclamo.create', compact('personas'));
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $solicitud_reclamo = new SolicitudReclamo();
        $solicitud_reclamo->codigo = $request->input('codigo');
        $solicitud_reclamo->solicitante = $request->input('solicitante');
        $solicitud_reclamo->fecha = $request->input('fecha');
        $solicitud_reclamo->descripcion = $request->input('descripcion');
        $solicitud_reclamo->url_archivo = $request->input('url_archivo');
        $solicitud_reclamo->id_persona = auth()->user()->id_persona;
        $solicitud_reclamo->save();


        return redirect()->route('solicitud_reclamo.index');
    }

    //mostrar un todos en una vista
    function show($id)
    {
        $solicitud_reclamo = SolicitudReclamo::find($id);
        return view('solicitud_reclamo.show', compact('solicitud_reclamo'));
    }

    //mostrar un formulario para editar un registro
    function edit($id)
    {
        $solicitud_reclamo = SolicitudReclamo::find($id);
        $personas = Persona::all(); //select * from persona;

        return view('solicitud_reclamo.edit', compact('solicitud_reclamo', 'personas'));
    }

    //actualizar los datos en la BD
    function update(Request $request, $id)
    {
        $solicitud_reclamo = SolicitudReclamo::find($id);
        $solicitud_reclamo->codigo = $request->input('codigo');
        $solicitud_reclamo->solicitante = $request->input('solicitante');
        $solicitud_reclamo->fecha = $request->input('fecha');
        $solicitud_reclamo->descripcion = $request->input('descripcion');
        $solicitud_reclamo->url_archivo = $request->input('url_archivo');
        $solicitud_reclamo->id_persona = auth()->user()->id_persona;


        $solicitud_reclamo->save();

        return redirect()->route('solicitud_reclamo.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $solicitud_reclamo = SolicitudReclamo::find($id);
        $solicitud_reclamo->delete();

        return redirect()->route('solicitud_reclamo.index');
    }
}
