@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE USUARIO</h5>

        <form action="{{ route('tipo_titulacion.update', [$tipo_titulacion->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="modalidad_titulacion" type="text" class="validate" name="modalidad_titulacion"  value="{{ $tipo_titulacion->modalidad_titulacion }}" required>
                                <label for="modalidad_titulacion">modalidad_titulacion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" value="{{ $tipo_titulacion->descripcion }}"  required>
                                <label for="descripcion">descripcion</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option {{ $persona->codigo=== $tipo_titulacion->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
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