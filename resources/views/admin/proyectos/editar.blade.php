
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
        <form action="{{ route('proyecto.update', $proyecto->id) }}" method="POST" enctype="multipart/form-data">
            @method('Put')
            @csrf


            <table class="table">
                <tr>
                    <th>Título</th>
                    <td><input class="form-control" type="text" name="titulo" id="titulo" value="{{ $proyecto->titulo }}"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <th>Ciudad</th>
                    <td><input class="form-control" type="text" name="ciudad" id="ciudad" value="{{ $proyecto->ciudad }}"></td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td> <textarea id="descripcion" name="descripcion" rows="5" cols="50"> {{$proyecto->descripcion}} </textarea></td>
                </tr>


                <tr>
                    <th>Imagen 1</th>
                    <td>
                        <img src="{{ asset($proyecto->foto1) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_1" id="imagen_1"></td>
                </tr>

                <tr>
                    <th>Imagen 2</th>
                    <td>
                        <img src="{{ asset($proyecto->foto2) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_2" id="imagen_2"></td>
                </tr>

                <tr>
                    <th>Imagen 3</th>
                    <td>
                        <img src="{{ asset($proyecto->foto3) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_3" id="imagen_3"></td>
                </tr>

                <tr>
                    <th>Imagen 4</th>
                    <td>
                        <img src="{{ asset($proyecto->foto4) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_4" id="imagen_4"></td>
                </tr>


                <tr>
                    <th>Imagen 5</th>
                    <td>
                        <img src="{{ asset($proyecto->foto5) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_5" id="imagen_5"></td>
                </tr>

                <tr>
                    <th>Imagen 6</th>
                    <td>
                        <img src="{{ asset($proyecto->foto6) }}" width="100" height="100">
                        <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen_6" id="imagen_6"></td>
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
