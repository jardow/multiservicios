
@extends('adminlte::page')
@section('title', 'Multiservicios - Editar')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Editar</h1>
    </div>
    <div class="card-body">
        @include('custom.message')
        <form action="{{ route('equipo.update', $equipo->id) }}" method="POST" enctype="multipart/form-data">
            @method('Put')
            @csrf
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <td><img src="{{ asset($equipo->foto) }}" width="100" height="100">
                <input class="form-control"  accept="image/png,image/jpeg" type="file" name="foto" id="foto" >
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tr>
            <th scope="col">Nombres</th>
            <td><input class="form-control" type="text" name="nombres" id="nombres"
                value="  {{ $equipo->nombres }}"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

          </tr>

          <tr>
            <th scope="col">Habilidad</th>
            <td><input class="form-control" type="text" name="habilidad" id="habilidad"
                value="  {{ $equipo->habilidad }}"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

          </tr>

          <tr>
            <th scope="col">Mensaje</th>
            <td><input class="form-control" type="text" name="mensaje" id="mensaje"
                value="  {{ $equipo->mensaje }}"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

          </tr>

          <tr>
            <th scope="col">Contacto</th>
            <td><input class="form-control" type="text" name="contacto" id="contacto"
                value="  {{ $equipo->contacto }}"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

          </tr>
        <tbody>

        </tbody>
      </table>
      <center><input class="btn btn-success" type="submit" value="Guardar"> </center>
    </form>
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
