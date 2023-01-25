<?php

namespace App\Http\Controllers;

use App\Models\ContadorVisitas;
use App\Models\Persona;
use App\Models\SolicitudReclamo;
use App\Models\Tesis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        ContadorVisitas::adicionarContador();

        return view('home');
    }

    public function buscador(Request $request){
        $texto = $request->input('texto');

        $solicitudes = SolicitudReclamo::where('descripcion', 'like', '%'.$texto.'%')->get();
        $personas = Persona::where('nombre', $texto)->orWhere('apellido', 'like', '%'.$texto.'%')->get();
        $tesiss = Tesis::where('nombre', 'like', '%'.$texto.'%')->get();

        if ($texto === 'vacio') {
            $solicitudes = null;
            $personas = null;
            $tesiss = null;
        }

        return view('buscador', compact('solicitudes', 'personas', 'tesiss', 'texto'));
    }
}
