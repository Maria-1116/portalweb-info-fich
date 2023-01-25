@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE SOLICITUDES Y RECLAMOS </h5>

            <form action="{{ route('solicitud_reclamo.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="codigo" type="number" class="validate" name="codigo" value="{{ auth()->user()->persona->codigo }}" required>
                                <label for="codigo">codigo</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="solicitante" type="text" class="validate" name="solicitante" value="{{ auth()->user()->persona->nombre.' '.auth()->user()->persona->apellido }}" required>
                                <label for="solicitante">solicitante</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="fecha" type="date" class="validate" name="fecha" required>
                                <label for="fecha">fecha</label>
                            </div>

                            <div class="input-field col s4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" required>
                                <label for="descripcion">descripcion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="url_archivo" type="text" class="validate" name="url_archivo" required>
                                <label for="url_archivo">url_archivo</label>
                            </div>

                            {{-- <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div> --}}


                        </div>
                    </form>

                    <button class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
