@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
            <div class="col s4">

                <a href="{{ route('convenio.create') }}" class="waves-effect waves-light btn">Registrar</a>
            </div>
        @endif
        
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de convenios</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>descripcion</th>
                        <th>institucion</th>
                        <th>area</th>
                        <th>duracion</th>
                        <th>requisitos</th>
                        <th>url</th>
                        {{-- <th>id_persona</th> --}}
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($convenios as $convenio)
                            <tr>
                                <td>{{ $convenio->descripcion }}</td>
                                <td>{{ $convenio->institucion }}</td>
                                <td>{{ $convenio->area }}</td>
                                <td>{{ $convenio->duracion }}</td>
                                <td>{{ $convenio->requisitos }}</td>
                                <td><a href="{{ $convenio->url }}" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                {{-- <td>{{ $convenio->id_persona }}</td> --}}

                                @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
                                <td>
                                    <a href="{{ route('convenio.edit', [$convenio->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('convenio.destroy',[$convenio->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection