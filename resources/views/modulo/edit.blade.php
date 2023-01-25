@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE MODULOS</h5>

        <form action="{{ route('modulo.update', [$modulo->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"  value="{{ $modulo->nombre }}" required>
                                <label for="name">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="ruta" type="text" class="validate" name="ruta"  value="{{ $modulo->ruta }}" required>
                                    <label for="ruta">email</label>
                                </div>
                            
                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    @foreach ($roles as $rol)
                                        <option  {{ $rol->id=== $modulo->id_roles?'selected':'' }} value="{{$rol->id}}">{{$rol->id.' '.$rol->nombre}}</option>
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