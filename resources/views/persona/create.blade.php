@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE PERSONA</h5>

        <form action="{{ route('persona.store') }}" method="post">
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
                            <input id="apellido" type="text" class="validate" name="apellido" required>
                            <label for="apellido">apellido</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="sexo" id="sexo" required>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                            <label for="sexo">sexo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" class="validate" name="telefono" required>
                            <label for="telefono">telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="correo" type="email" class="validate" name="correo" required>
                            <label for="correo">correo</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="tipo" id="tipo" required>
                                <option value="SEC">Secretaria</option>
                                <option value="COO">Coordinador</option>
                                <option value="DIR">Director</option>
                                <option value="EST">Estudiante</option>
                                <option value="DOC">Docente</option>
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