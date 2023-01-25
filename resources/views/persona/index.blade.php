@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('persona.create') }}" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de Persona</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>sexo</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>tipo</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($personas as $persona)
                            <tr>
                                <td>{{ $persona->codigo }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido }}</td>
                                <td>{{ $persona->sexo }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->correo }}</td>
                                <td>
                                    @if ($persona->tipo==='SEC')
                                    {{'Secretaria'}}
                                    @endif
                                    @if($persona->tipo==='COO')
                                    {{'Coordinador'}}
                                    @endif
                                    @if($persona->tipo==='DIR')
                                    {{'Director'}}
                                    @endif
                                    @if($persona->tipo==='EST')
                                    {{'Estudiante'}}
                                    @endif
                                    @if($persona->tipo==='DOC')
                                    {{'Docente'}}
                                    @endif
                                    <td>
                                
                                <td>
                                    <a href="{{ route('persona.edit', [$persona->codigo]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('persona.destroy', [$persona->codigo]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection