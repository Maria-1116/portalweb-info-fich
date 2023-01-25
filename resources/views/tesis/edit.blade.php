@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS DE TESIS</h5>

        <form action="{{ route('tesis.update', [$tesis->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="codigo" type="number" class="validate" name="codigo" value="{{ $tesis->codigo }}"required>
                            <label for="codigo">codigo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"value="{{ $tesis->nombre }}" required>
                            <label for="nombre">nombre</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="fecha_defensa" type="date" class="validate" name="fecha_defensa" value="{{ $tesis->fecha_defensa }}"required>
                            <label for="fecha_defensa">fecha_defensa</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="autor" type="text" class="validate" name="autor" value="{{ $tesis->autor }}"required>
                            <label for="autor">autor</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="jurados" type="text" class="validate" name="jurados" value="{{ $tesis->jurados }}"required>
                            <label for="jurados">jurados</label>
                        </div>  
                        <div class="input-field col s4">
                            <input id="url" type="text" class="validate" name="url"value="{{ $tesis->url }}" required>
                            <label for="url">url</label>
                        </div>                            
                        <div class="input-field col s4">
                            <select name="id_persona" id="id_persona" required>

                                @foreach ($personas as $persona)
                                    <option {{ $persona->codigo=== $tesis->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                @endforeach
                            </select>
                            <label for="id_persona">id_persona</label>
                        </div>


                    </div>
                </form>

                <button class="btn" type="submit">MODIFICAR</button>
            </div>
        </form>
    </div>
</div>
@endsection