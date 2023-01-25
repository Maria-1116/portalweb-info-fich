@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('buscador') }}" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="texto" type="text" class="validate" name="texto" required>
                    <label for="texto">buscador</label>
                </div>

                <div class="input-field col s12">
                    <button class="btn" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <h4>Busqueda por el termino: {{ $texto }}</h4>
    </div>
    
    <div class="row"><div class="divider"></div></div>

    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para solicitudes y reclamos</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>solicitante</th>
                        <th>fecha</th>
                        <th style="color: lime">descripcion</th>
                        <th>url_archivo</th>
                        {{-- <th>id_persona</th> --}}
                        
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($solicitudes as $solicitud_reclamo)
                            <tr>
                                <td>{{ $solicitud_reclamo->codigo }}</td>
                                <td>{{ $solicitud_reclamo->solicitante }}</td>
                                <td>{{ $solicitud_reclamo->fecha }}</td>
                                <td style="color: lime">{{ $solicitud_reclamo->descripcion }}</td>
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


    <div class="row">
        <div class="divider"></div>
    </div>


    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para Personas</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th style="color: lime">nombre</th>
                        <th style="color: lime">apellido</th>
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
                                <td  style="color: lime">{{ $persona->nombre }}</td>
                                <td  style="color: lime">{{ $persona->apellido }}</td>
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
                                    @if (!auth()->user()->persona->tipo === 'EST')
                                    <a href="{{ route('persona.edit', [$persona->codigo]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('persona.destroy', [$persona->codigo]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="divider"></div>
    </div>




    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para tesis</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th style="color: lime">nombre</th>
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
                                <td style="color: lime"><strong>{{ $tesis->nombre }}</strong></td>
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
</div>
@endsection
