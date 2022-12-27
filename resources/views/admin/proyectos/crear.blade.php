
@extends('adminlte::page')
@section('title', 'Multiservicios - Crear')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Crear</h1>
    </div>
    <div class="card-body">
        @include('custom.message')
        <form action="{{ route('proyecto.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


    <table class="table">
        <tr>
            <th>Título</th>
            <td><input class="form-control" type="text" name="titulo" id="titulo"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th>Ciudad</th>
            <td><input class="form-control" type="text" name="ciudad" id="ciudad"></td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td><input class="form-control" type="text" name="descripcion" id="descripcion"></td>
        </tr>

    

        <tr>
            <th>Imagen 1</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_1" id="imagen_1"></td>
        </tr>

        <tr>
            <th>Imagen 2</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_2" id="imagen_2"></td>
        </tr>

        <tr>
            <th>Imagen 3</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_3" id="imagen_3"></td>
        </tr>

        <tr>
            <th>Imagen 4</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_4" id="imagen_4"></td>
        </tr>


        <tr>
            <th>Imagen 5</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_5" id="imagen_5"></td>
        </tr>

        <tr>
            <th>Imagen 6</th>
            <td><input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_6" id="imagen_6"></td>
        </tr>

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
