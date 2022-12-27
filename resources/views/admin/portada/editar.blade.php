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
            <form action="{{ route('portada.update', $portada->id) }}" method="POST" enctype="multipart/form-data">
                @method('Put')
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Logo</th>
                            <td> <img src="{{ asset($portada->logo) }}" width="100" height="100">
                                <input class="form-control" accept="image/png" type="file" name="logo" id="logo">
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">Título</th>
                            <td><input class="form-control" type="text" name="titulo" id="titulo"
                                    value="  {{ $portada->titulo1 }}"></td>
                        </tr>
                        <tr>
                            <th scope="col">Sub Título</th>
                            <td><input class="form-control" type="text" name="subtitulo" id="subtitulo"
                                    value="  {{ $portada->titulo2 }}"></td>
                        </tr>
                        <tr>
                            <th scope="col">Fondo</th>
                            <td> <img src="{{ asset($portada->fondo) }}" width="100" height="100">
                                <input class="form-control" accept="image/png" type="file" name="fondo" id="fondo">
                            </td>

                        </tr>
                    </thead>
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
