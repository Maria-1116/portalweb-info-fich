@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE TITULACIONES</h5>

            <form action="{{ route('tipo_titulacion.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="modalidad_titulacion" type="text" class="validate" name="modalidad_titulacion" required>
                                <label for="modalidad_titulacion">modalidad_titulacion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" required>
                                <label for="descripcion">descripcion</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>



                        </div>
                    </form>

                    <button class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
