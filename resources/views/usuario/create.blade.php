@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE USUARIO</h5>

            <form action="{{ route('user.store') }}" method="post">
                @csrf

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="username" type="text" class="validate" name="username" required>
                                <label for="username">username</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">email</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password">password</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    @foreach ($personas as $persona)
                                        <option value="{{$persona->codigo}}">{{$persona->codigo.' '.$persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_persona">id_persona</label>
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
