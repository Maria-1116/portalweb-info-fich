@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE MODULO</h5>

            <form action="{{ route('modulo.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nombre" type="text" class="validate" name="nombre" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="ruta" type="text" class="validate" name="ruta" required>
                                <label for="ruta">ruta</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    @foreach ($roles as $rol)
                                        <option value="{{$rol->id}}">{{$rol->id.' '.$rol->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_roles">id_roles</label>
                            </div>


                        </div>
                    </form>

                    <button class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
