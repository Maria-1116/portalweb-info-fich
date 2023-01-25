@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('modulo.create') }}" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de Modulos</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>rol</th>
                        <th>modulo</th>
                        <th>alias de ruta</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($modulos as $modulo)
                            <tr>
                                <td>{{ $modulo->roles->nombre }}</td>
                                <td>{{ $modulo->nombre }}</td>
                                <td>{{ $modulo->ruta }}</td>
                                <td>
                                    <a href="{{ route('modulo.edit', [$modulo->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('modulo.destroy', [$modulo->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection