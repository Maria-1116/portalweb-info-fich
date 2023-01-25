@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('user.create') }}" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de Usuario</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        {{-- <th>password</th> --}}
                        <th>persona</th>
                        <th>rol</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                {{-- <td>{{ $usuario->password }}</td> --}}
                                <td>{{ $usuario->persona->nombre }}</td>
                                <td>{{ $usuario->roles->nombre }}</td>
                                <td>
                                    <a href="{{ route('user.edit', [$usuario->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('user.destroy', [$usuario->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection