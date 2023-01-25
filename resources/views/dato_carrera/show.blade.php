@extends('layouts.app')
@section('content')

<div class="row" style="padding-top: 3em;">
    <div class="col s12 m6">
        <span style="font-weight: bold; font-size: 22pt;">Codigo carrera/Plan   : </span>
        <span style="font-weight: bold; font-size: 22pt;">{{ $dato_carrera->codigo }}</span>
        <br>
        <br>

        <span style="font-weight: bold; font-size: 22pt;">Nombres: </span>
        <span style="font-weight: bold; font-size: 22pt;">{{ $dato_carrera->nombre }}</span>
        <br>
        <br>

        <span style="font-weight: bold">Objetivo: </span>
        <p>{{ $dato_carrera->objetivo }}</p>
        <br>
        <br>

        <span style="font-weight: bold">Mision: </span>
        <span>{{ $dato_carrera->mision }}</span>
        <br>
        <br>

        <span style="font-weight: bold">Vision: </span>
        <p>{{ $dato_carrera->vision }}</p>
        <br>
        <br>

        <span style="font-weight: bold">Perfil Profesional: </span>
        <p>{{ $dato_carrera->perfil_profesional }}</p>
        <br>
        <br>

        <span style="font-weight: bold">Campo Laboral: </span>
        <p>{{ $dato_carrera->campo_laboral }}</p>
        <br>
        <br>
    </div>
    <div class="col s12 m6">
        <span style="font-weight: bold">Programas Analiticos: </span>
        <a href="{{ $dato_carrera->programas_analiticos }}" target="_blank">{{ $dato_carrera->programas_analiticos }}</a>
        <br>
        <br>

        <span style="font-weight: bold">Carga Horaria: </span>
        <a href="{{ $dato_carrera->horario_actual }}" target="_blank">{{ $dato_carrera->horario_actual }}</a>
        <br>
        <br>

        <span style="font-weight: bold">Malla Curricular: </span>
        <a href="{{ $dato_carrera->malla_curricular }}" target="_blank">{{ $dato_carrera->malla_curricular }}</a>
        <br>
        <br>

        <span style="font-weight: bold">Plantel Academico: </span>
        <ol>
            @foreach($datos=explode(",", $dato_carrera->plantel_academico) as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ol>
        <br>
        <br>

    </div>
</div>

@endsection