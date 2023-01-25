@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRAR TESIS</h5>

            <form action="{{ route('tesis.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="codigo" type="number" class="validate" name="codigo" required>
                                <label for="codigo">codigo</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="nombre" type="text" class="validate" name="nombre" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="fecha_defensa" type="date" class="validate" name="fecha_defensa" required>
                                <label for="fecha_defensa">fecha_defensa</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="autor" type="text" class="validate" name="autor" required>
                                <label for="autor">autor</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="jurados" type="text" class="validate" name="jurados" required>
                                <label for="jurados">jurados</label>
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
