@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS CARRERA</h5>

        <form action="{{ route('dato_carrera.update', [$dato_carrera->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <div class="input-field col s4">
                                <input id="codigo" type="text" class="validate" name="codigo"  value="{{ $dato_carrera->codigo }}" required>
                                <label for="codigo">codigo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="nombre" type="text" class="validate" name="nombre"value="{{ $dato_carrera->nombre }}" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="objetivo" type="text" class="validate" name="objetivo" value="{{ $dato_carrera->objetivo }}"required>
                                <label for="objetivo">objetivo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="mision" type="text" class="validate" name="mision" value="{{ $dato_carrera->mision }}" required>
                                <label for="mision">mision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="vision" type="text" class="validate" name="vision" value="{{ $dato_carrera->vision }}" required>
                                <label for="vision">vision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="perfil_profesional" type="text" class="validate" name="perfil_profesional" value="{{ $dato_carrera->perfil_profesional }}" required>
                                <label for="perfil_profesional">perfil_profesional</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="campo_laboral" type="text" class="validate" name="campo_laboral" value="{{ $dato_carrera->campo_laboral }}" required>
                                <label for="campo_laboral">campo_laboral</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="programas_analiticos" type="text" class="validate" name="programas_analiticos" value="{{ $dato_carrera->programas_analiticos }}" required>
                                <label for="programas_analiticos">programas_analiticos</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="horario_actual" type="text" class="validate" name="horario_actual" value="{{ $dato_carrera->horario_actual }}" required>
                                <label for="horario_actual">horario_actual</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="malla_curricular" type="text" class="validate" name="malla_curricular" value="{{ $dato_carrera->malla_curricular }}" required>
                                <label for="malla_curricular">malla_curricular</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="plantel_academico" type="text" class="validate" name="plantel_academico" value="{{ $dato_carrera->plantel_academico }}" required>
                                <label for="plantel_academico">plantel_academico</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option {{ $persona->codigo=== $dato_carrera->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                    </div>
                </form>

                <button class="btn" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>
@endsection