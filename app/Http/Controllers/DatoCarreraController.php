<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\DatoCarrera;
use App\Models\Persona;
use Illuminate\Http\Request;

class DatoCarreraController extends Controller
{
    function index()
    {
        ContadorVisitas::adicionarContador();

        //variables
        // $datos_carrera = DatoCarrera::all();
        // return view('dato_carrera.index', compact('datos_carrera'));
        $dato_carreras = DatoCarrera::all();
        $dato_carrera = $dato_carreras[0];
        return view('dato_carrera.show', compact('dato_carrera'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();

        $personas = Persona::all(); //select * from persona;
        return view('dato_carrera.create', compact('personas' ));
    }

    function store(Request $request)
    {
        $dato_carrera = new DatoCarrera();
        $dato_carrera->codigo = $request->input('codigo');
        $dato_carrera->nombre = $request->input('nombre');
        $dato_carrera->objetivo = $request->input('objetivo');
        $dato_carrera->mision = $request->input('mision');
        $dato_carrera->vision = $request->input('vision');
        $dato_carrera->perfil_profesional = $request->input('perfil_profesional');
        $dato_carrera->campo_laboral = $request->input('campo_laboral');
        $dato_carrera->programas_analiticos = $request->input('programas_analiticos');
        $dato_carrera->horario_actual = $request->input('horario_actual');
        $dato_carrera->malla_curricular = $request->input('malla_curricular');
        $dato_carrera->plantel_academico = $request->input('plantel_academico');

        $dato_carrera->id_persona = $request->input('id_persona');
        $dato_carrera->save();


        return redirect()->route('dato_carrera.index');
    }

    function show($id)
    {
        ContadorVisitas::adicionarContador();

        $dato_carrera = DatoCarrera::find($id);
        return view('dato_carrera.show', compact('dato_carrera'));
    }

    function edit($id)
    {
        ContadorVisitas::adicionarContador();
        
        $dato_carrera = DatoCarrera::find($id);
        $personas = Persona::all(); //select * from persona;

        return view('dato_carrera.edit', compact('dato_carrera', 'personas'));
    }

    function update(Request $request, $id)
    {
        $dato_carrera = DatoCarrera::find($id);
        $dato_carrera->codigo = $request->input('codigo');
        $dato_carrera->nombre = $request->input('nombre');
        $dato_carrera->objetivo = $request->input('objetivo');
        $dato_carrera->mision = $request->input('mision');
        $dato_carrera->vision = $request->input('vision');
        $dato_carrera->perfil_profesional = $request->input('perfil_profesional');
        $dato_carrera->campo_laboral = $request->input('campo_laboral');
        $dato_carrera->programas_analiticos = $request->input('programas_analiticos');
        $dato_carrera->horario_actual = $request->input('horario_actual');
        $dato_carrera->malla_curricular = $request->input('malla_curricular');
        $dato_carrera->plantel_academico = $request->input('plantel_academico');
        $dato_carrera->id_persona = $request->input('id_persona');


        $dato_carrera->save();

        return redirect()->route('dato_carrera.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $dato_carrera = DatoCarrera::find($id);
        $dato_carrera->delete();

        return redirect()->route('dato_carrera.index');
    }
}
