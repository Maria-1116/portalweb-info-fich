@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE PERSONA</h5>

        <form action="{{ route('persona.update', [$persona->codigo]) }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="codigo" type="number" class="validate" name="codigo" value="{{ $persona->codigo }}" required>
                            <label for="codigo">codigo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre" value="{{ $persona->nombre }}" required>
                            <label for="nombre">nombre</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="apellido" type="text" class="validate" name="apellido" value="{{ $persona->apellido }}" required>
                            <label for="apellido">apellido</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="sexo" id="sexo" required>
                                <option {{ $persona->sexo==='F'?'selected':'' }} value="F">Femenino</option>
                                <option {{ $persona->sexo==='M'?'selected':'' }} value="M">Masculino</option>
                            </select>
                            <label for="sexo">sexo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" class="validate" name="telefono" value="{{ $persona->telefono }}" required>
                            <label for="telefono">telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="correo" type="email" class="validate" name="correo" value="{{ $persona->correo }}" required>
                            <label for="correo">correo</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="tipo" id="tipo" required>
                                <option {{ $persona->tipo==='SEC'?'selected':'' }} value="SEC">Secretaria</option>
                                <option {{ $persona->tipo==='COO'?'selected':'' }} value="COO">Coordinador</option>
                                <option {{ $persona->tipo==='DIR'?'selected':'' }} value="DIR">Director</option>
                                <option {{ $persona->tipo==='EST'?'selected':'' }} value="EST">Estudiante</option>
                                <option {{ $persona->tipo==='DOC'?'selected':'' }} value="DOC">Docente</option>
                            </select>
                            <label for="tipo">tipo</label>
                        </div>
                    </div>
                </form>

                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection