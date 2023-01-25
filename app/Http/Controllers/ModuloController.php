<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Modulo;
use App\Models\Roles;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    //listado de moduloss
    function index()
    {
        //variables
        ContadorVisitas::adicionarContador();

        $modulos = Modulo::orderBy('id_roles', 'asc')->get();
        return view('modulo.index', compact('modulos'));
    }

    //mostrar un formulario para registro nuevo
    function create()
    {
        ContadorVisitas::adicionarContador();

        $roles = Roles::all(); 
        return view('modulo.create', compact( 'roles'));
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $modulo = new Modulo();
        $modulo->nombre = $request->input('nombre');
        $modulo->ruta = $request->input('ruta');
        $modulo->id_roles = $request->input('id_roles');
        
        $modulo->save();


        return redirect()->route('modulo.index');
    }

    //mostrar un todos en una vista
    function show($id)
    {
        ContadorVisitas::adicionarContador();

        $modulo = Modulo::find($id);
        return view('modulo.show', compact('modulo'));
    }

    //mostrar un formulario para editar un registro
    function edit($id)
    {
        ContadorVisitas::adicionarContador();
        
        $modulo = Modulo::find($id);
        $roles = Roles::all(); 

        return view('modulo.edit', compact('modulo', 'roles'));
    }

    //actualizar los datos en la BD
    function update(Request $request, $id)
    {
        $modulo = Modulo::find($id);
        $modulo->nombre = $request->input('nombre');
        $modulo->ruta = $request->input('ruta');
        $modulo->id_roles = $request->input('id_roles');
        
        $modulo->save();

        return redirect()->route('modulo.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $modulo = Modulo::find($id);
        $modulo->delete();

        return redirect()->route('modulo.index');
    }
}
