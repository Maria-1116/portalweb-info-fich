<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    function index()
    {
        ContadorVisitas::adicionarContador();

        //variables
        $roless = Roles::all();
        return view('rol.index', compact('roless'));
    }

    function create()
    {
        ContadorVisitas::adicionarContador();

        return view('rol.create');
    }

    function store(Request $request)
    {
        $roles = new Roles();
        $roles->nombre = $request->input('nombre');
        
        $roles->save();


        return redirect()->route('roles.index');
    }

    function show($id)
    {
        ContadorVisitas::adicionarContador();

        $roles = Roles::find($id);
        return view('rol.show', compact('roles'));
    }

    function edit($id)
    {
        ContadorVisitas::adicionarContador();
        
        $roles = Roles::find($id);
        return view('rol.edit', compact('roles'));
    }

    function update(Request $request, $id)
    {
        $roles = Roles::find($id);
        $roles->nombre = $request->input('nombre');
        
        $roles->save();

        return redirect()->route('roles.index');
    }

    function destroy($id)
    {
        $roles = Roles::find($id);
        $roles->delete();

        return redirect()->route('roles.index');
    }
}
