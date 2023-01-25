@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE USUARIO</h5>

        <form action="{{ route('user.update', [$usuario->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="name" type="text" class="validate" name="name"  value="{{ $usuario->name }}" required>
                                <label for="name">name</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="email" type="text" class="validate" name="email"  value="{{ $usuario->email }}" required>
                                    <label for="email">email</label>
                                </div>
                            <div class="input-field col s4">
                                <input id="password" type="password" class="validate" name="password" value="{{ $usuario->password }}"  required>
                                <label for="password">password</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option {{ $persona->codigo=== $usuario->id_persona?'selected':'' }} value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    @foreach ($roles as $rol)
                                        <option  {{ $rol->id=== $usuario->id_roles?'selected':'' }} value="{{$rol->id}}">{{$rol->id.' '.$rol->nombre}}</option>
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