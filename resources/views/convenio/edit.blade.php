@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS DE CONVENIO</h5>

        <form action="{{ route('convenio.update', [$convenio->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="descripcion" type="text" class="validate" name="descripcion" value="{{ $convenio->descripcion }}"required>
                            <label for="descripcion">descripcion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="institucion" type="text" class="validate" name="institucion"value="{{ $convenio->institucion }}" required>
                            <label for="institucion">institucion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="area" type="text" class="validate" name="area" value="{{ $convenio->area }}"required>
                            <label for="area">area</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="duracion" type="text" class="validate" name="duracion" value="{{ $convenio->duracion }}"required>
                            <label for="duracion">duracion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="requisitos" type="text" class="validate" name="requisitos" value="{{ $convenio->requisitos }}"required>
                            <label for="requisitos">requisitos</label>
                        </div>  
                        <div class="input-field col s4">
                            <input id="url" type="text" class="validate" name="url"value="{{ $convenio->url }}" required>
                            <label for="url">url</label>
                        </div>                            
                        <div class="input-field col s4">
                            <select name="id_persona" id="id_persona" required>

                                @foreach ($personas as $persona)
                                    <option {{ $persona->codigo=== $convenio->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
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