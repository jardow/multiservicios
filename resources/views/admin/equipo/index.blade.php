
@extends('adminlte::page')
@section('title', 'Multiservicios - Equipo')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Equipo</h1>
    </div>
    <div class="card-body">
 @include('custom.message')

    <h2>Equipo </h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombres</th>
            <th scope="col">Habilidad</th>
            <th scope="col">Mensaje</th>
            <th scope="col">Celular</th>
            <th scope="col">Acciones</th>

          </tr>
        </thead>
        <tbody>

  @foreach ($equipos as $equipo )


          <tr>
            <td> <img src="{{ asset($equipo->foto) }}" width="100" height="100"></td>
            <td>{{ $equipo->nombres }}</td>
            <td>{{ $equipo->habilidad }}</td>
            <td>{{ $equipo->mensaje }}</td>
            <td>{{ $equipo->contacto }}</td>
            <td><a class="btn btn-success" href="{{ route('equipo.edit', $equipo->id) }}">Editar</a></td>
          </tr>
          @endforeach


        </tbody>
      </table>
    </div>


</div>

@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<!--
<script>
Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
</script>
-->
@stop
