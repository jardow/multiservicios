@extends('adminlte::page')
@section('title', 'Multiservicios - Portada')
@section('plugins.Sweetalert2', true)
@section('content_header')
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Multiservicios - Portada</h1>
        </div>
        <div class="card-body">
            @include('custom.message')
            <table class="table">

                <thead>
                    @foreach ($portada as $port)
                    <tr>
                        <th>Logo</th>
                        <td> <img src="{{ asset($port->logo) }}" width="100" height="100"></td>
                    </tr>
                    <tr>
                        <th scope="col">Título</th>
                        <td>{{ $port->titulo1 }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Sub Título</th>
                        <td>{{ $port->titulo2 }}</td>
                    </tr>

                    <tr>
                        <th scope="col">Fondo</th>
                        <td> <img src="{{ asset($port->fondo) }}" width="100" height="100"></td>

                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <center><a class="btn btn-success" href="{{ route('portada.edit', $port->id) }}">Editar</a></center>
        @endforeach
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
