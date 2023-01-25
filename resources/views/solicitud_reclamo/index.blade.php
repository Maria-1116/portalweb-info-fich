@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('solicitud_reclamo.create') }}" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de solicitudes y reclamos</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>solicitante</th>
                        <th>fecha</th>
                        <th>descripcion</th>
                        <th>url_archivo</th>
                        {{-- <th>id_persona</th> --}}
                        
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($solicitud_reclamos as $solicitud_reclamo)
                            <tr>
                                <td>{{ $solicitud_reclamo->codigo }}</td>
                                <td>{{ $solicitud_reclamo->solicitante }}</td>
                                <td>{{ $solicitud_reclamo->fecha }}</td>
                                <td>{{ $solicitud_reclamo->descripcion }}</td>
                                <td><a href="{{ $solicitud_reclamo->url_archivo }}" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                {{-- <td>{{ $solicitud_reclamo->id_persona }}</td> --}}
                               
                                
                                @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
                                    <td>
                                    <a href="{{ route('solicitud_reclamo.edit', [$solicitud_reclamo->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('solicitud_reclamo.destroy',[$solicitud_reclamo->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
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