@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS DE SOLICITUD Y RECLAMO</h5>

        <form action="{{ route('solicitud_reclamo.update', [$solicitud_reclamo->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="codigo" type="number" class="validate" name="codigo" value="{{ $solicitud_reclamo->codigo }}"required>
                            <label for="codigo">codigo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="solicitante" type="text" class="validate" name="solicitante"value="{{ $solicitud_reclamo->solicitante }}" required>
                            <label for="solicitante">solicitante</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="fecha" type="date" class="validate" name="fecha" value="{{ $solicitud_reclamo->fecha }}"required>
                            <label for="fecha">fecha</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="descripcion" type="text" class="validate" name="descripcion" value="{{ $solicitud_reclamo->descripcion }}"required>
                            <label for="descripcion">descripcion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="url_archivo" type="text" class="validate" name="url_archivo" value="{{ $solicitud_reclamo->url_archivo }}"required>
                            <label for="url_archivo">url_archivo</label>
                        </div>  
                                                   
                        {{-- <div class="input-field col s4">
                            <select name="id_persona" id="id_persona" required>

                                @foreach ($personas as $persona)
                                    <option {{ $persona->codigo=== $solicitud_reclamo->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="id_persona">id_persona</label>
                        </div> --}}


                    </div>
                </form>

                <button class="btn" type="submit">MODIFICAR</button>
            </div>
        </form>
    </div>
</div>
@endsection