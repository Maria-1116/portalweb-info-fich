@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        
        @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
            <div class="col s4">

                <a href="{{ route('tesis.create') }}" class="waves-effect waves-light btn">Registrar</a>
            </div>
        @endif
        
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de tesis</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>fecha_defensa</th>
                        <th>autor</th>
                        <th>jurados</th>
                        <th>enlace</th>
                        {{-- <th>id_persona</th> --}}
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tesiss as $tesis)
                            <tr>
                                <td>{{ $tesis->codigo }}</td>
                                <td>{{ $tesis->nombre }}</td>
                                <td>{{ $tesis->fecha_defensa }}</td>
                                <td>{{ $tesis->autor }}</td>
                                <td>{{ $tesis->jurados }}</td>
                                {{-- <td>{{ $tesis->url }}</td> --}}
                                <td><a href="{{ $tesis->url }}" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                {{-- <td>{{ $tesis->id_persona }}</td> --}}

                                @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
                                <td>
                                         <a href="{{ route('tesis.edit', [$tesis->id]) }}"><span class="new badge amber accent-4"
                                            data-badge-caption="editar"></span></a>
                                            <a href="{{ route('tesis.destroy', [$tesis->id]) }}"><span class="new badge red"
                                            data-badge-caption="eliminar"></span></a>
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