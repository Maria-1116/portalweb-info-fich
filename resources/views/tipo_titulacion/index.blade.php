@extends('layouts.app')

@section('content')

        {{-- @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
            <div class="col s4">

                <a href="{{ route('tipo_titulacion.create') }}" class="waves-effect waves-light btn">Registrar</a>
            </div>
        @endif --}}
        
    @foreach ($tipos_titulacion as $tipo_titulacion)
        <span><strong>{{ $tipo_titulacion->modalidad_titulacion }}</strong></span>
        <ol>
            @foreach ($datos = explode(',', $tipo_titulacion->descripcion) as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ol>


        @if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO'))
        <div class="left">
            <a href="{{ route('tipo_titulacion.edit', [$tipo_titulacion->id]) }}"><span class="new badge amber accent-4"
                data-badge-caption="editar"></span></a>
            <a href="{{ route('tipo_titulacion.destroy', [$tipo_titulacion->id]) }}"><span class="new badge red"
                    data-badge-caption="eliminar"></span></a>
        </div>
        @endif

        <br>
        <br>
        <div class="divider"></div>
    @endforeach
@endsection
