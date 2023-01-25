@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRAR CONVENIO</h5>

            <form action="{{ route('convenio.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" required>
                                <label for="descripcion">descripcion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="institucion" type="text" class="validate" name="institucion" required>
                                <label for="institucion">institucion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="area" type="text" class="validate" name="area" required>
                                <label for="area">area</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="duracion" type="text" class="validate" name="duracion" required>
                                <label for="duracion">duracion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="requisitos" type="text" class="validate" name="requisitos" required>
                                <label for="requisitos">requisitos</label>
                            </div>  
                            <div class="input-field col s4">
                                <input id="url" type="text" class="validate" name="url" required>
                                <label for="url">url</label>
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
