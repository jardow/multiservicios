@extends('adminlte::page')
@section('title', 'Administrador')

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
            <form action="{{ route('servicio.update', $servicio->id) }}" method="POST" enctype="multipart/form-data">
                @method('Put')
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <td> <img src="{{ asset($servicio->foto) }}" width="100" height="100">
                                <input class="form-control" accept="image/jpeg,image/png" type="file" name="imagen"
                                    id="imagen">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Titulo</th>

                            <td><input class="form-control" type="text" name="titulo" id="titulo"
                                    value="  {{ $servicio->titulo }}"></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>Descripcion</th>

                            <td><input class="form-control" type="text" name="descripcion" id="descripcion"
                                    value="  {{ $servicio->descripcion }}"></td>
                            <td></td>
                            <td></td>
                            <td></td>


                        </tr>
                    </thead>

                    <tr>


                        <td></td>
                        <td></td>
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
