
@extends('adminlte::page')
@section('title', 'Multiservicios - Servicios')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Servicios</h1>
    </div>
    <div class="card-body">
        @include('custom.message')
        <a href=" {{route('servicio.create')}}" class="btn btn-primary">CREAR</a>
        <table class="table">
            <thead>
     <tr>
        <th>Foto</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Editar</th>
        <th>Eliminar</th>
     </tr>
    </thead>
     @foreach ($servicios as $servicio )
     <tr>
         <td><img src="{{ asset($servicio->foto) }}" width="100" height="100"></td>
        <td>{{ $servicio->titulo }}</td>
        <td>{{ $servicio->descripcion }}</td>
        <td><a class="btn btn-success"  href="{{ route('servicio.edit', $servicio->id)}}">Editar</a></td>
        <td>
            <form action="{{ route('servicio.destroy',$servicio->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Esta seguro que desea eliminar servicio :  {{$servicio->titulo}}')" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
        @endforeach




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
