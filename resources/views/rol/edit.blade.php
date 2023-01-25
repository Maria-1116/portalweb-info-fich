@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE ROLES</h5>

        <form action="{{ route('roles.update', [$roles->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"  value="{{ $roles->nombre }}" required>
                                <label for="nombre">nombre</label>
                            </div>
                            
                    </div>
                </form>

                <button class="btn" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>
@endsection