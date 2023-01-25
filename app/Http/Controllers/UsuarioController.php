<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use App\Models\Roles;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //listado de usuarios
    function index()
    {
        ContadorVisitas::adicionarContador();
        
        //variables
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    //mostrar un formulario para registro nuevo
    function create()
    {
        ContadorVisitas::adicionarContador();

        $personas = Persona::all(); //select * from persona;
        $roles = Roles::all(); 
        return view('usuario.create', compact('personas', 'roles'));
    }

    //guardar los datos en la BD
    function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->input('username');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->id_persona = $request->input('id_persona');
        $usuario->id_roles = $request->input('id_roles');
        
        $usuario->save();


        return redirect()->route('user.index');
    }

    //mostrar un todos en una vista
    function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.show', compact('usuario'));
    }

    //mostrar un formulario para editar un registro
    function edit($id)
    {
        $usuario = Usuario::find($id);
        $personas = Persona::all(); //select * from persona;
        $roles = Roles::all(); 

        return view('usuario.edit', compact('usuario', 'personas', 'roles'));
    }

    //actualizar los datos en la BD
    function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->id_persona = $request->input('id_persona');
        $usuario->id_roles = $request->input('id_roles');
        
        $usuario->save();

        return redirect()->route('user.index');
    }

    //eliminar un registro
    function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('user.index');
    }
}
