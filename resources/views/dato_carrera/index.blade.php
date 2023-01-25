@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('dato_carrera.create') }}" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Informacion de la carrera de Ingenieria Informatica</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>objetivo</th>
                        <th>mision</th>
                        <th>vision</th>
                        <th>perfil_profesional</th>
                        <th>campo_laboral</th>
                        <th>programas_analiticos</th> 
                        <th>horario_actual</th>
                        <th>malla_curricular</th>
                        <th>plantel_academico</th>
                        <th>id_persona</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($datos_carrera  as $dato_carrera)
                            <tr>
                                <td>{{ $dato_carrera->codigo }}</td>
                                <td>{{ $dato_carrera->nombre }}</td>
                                <td>{{ $dato_carrera->objetivo }}</td>
                                <td>{{ $dato_carrera->mision }}</td>
                                <td>{{ $dato_carrera->vision }}</td>
                                <td>{{ $dato_carrera->perfil_profesional }}</td>
                                <td>{{ $dato_carrera->campo_laboral }}</td>
                                <td>{{ $dato_carrera->programas_analiticos }}</td>
                                <td>{{ $dato_carrera->horario_actual }}</td>
                                <td>{{ $dato_carrera->malla_curricular }}</td>
                                <td>{{ $dato_carrera->plantel_academico }}</td>
                                <td>{{ $dato_carrera->id_persona }}</td>
                                <td>
                                    <a href="{{ route('dato_carrera.edit', [$dato_carrera->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('dato_carrera.destroy', [$dato_carrera->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection