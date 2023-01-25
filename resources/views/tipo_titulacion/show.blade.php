@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col s6 offset-s3">
        <h5>Datos del personal</h5>

        <span style="font-weight: bold">CI: </span>
        <span>{{ $personal->ci }}</span>
        <br>

        <span style="font-weight: bold">Nombres: </span>
        <span>{{ $personal->nombre }}</span>
        <br>

        <span style="font-weight: bold">Celular: </span>
        <span>{{ $personal->celular }}</span>
        <br>

        <span style="font-weight: bold">Direccion: </span>
        <span>{{ $personal->direccion }}</span>
        <br>

        <span style="font-weight: bold">Fecha de Nacimiento: </span>
        <span>{{ $personal->fecha_nac }}</span>
        <br>

        <br>

        <a href="{{ route('personal.index') }}">Volver</a>

    </div>
</div>

@endsection