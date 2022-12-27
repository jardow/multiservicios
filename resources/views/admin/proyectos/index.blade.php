
@extends('adminlte::page')
@section('title', 'Multiservicios - Proyectos')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Proyectos</h1>
    </div>
    <div class="card-body">
        @include('custom.message')
        <a href=" {{route('proyecto.create')}}" class="btn btn-primary">CREAR</a>
    <table class="table">
        <tr>
           <th>Título</th>
           <th>Ciudad</th>
           <th>Descripción</th>
           <th>Foto1</th>
           <th>Foto2</th>
           <th>Foto3</th>
           <th>Foto4</th>
           <th>Foto5</th>
           <th>Foto6</th>
        </tr>
        @foreach ($proyectos as $proyecto )
        <tr>

           <td>{{ $proyecto->titulo }}</td>
           <td>{{ $proyecto->ciudad }}</td>
           <td>{{ $proyecto->descripcion }}</td>

           <td><img src="{{ asset($proyecto->foto1) }}" width="100" height="100"></td>
           <td><img src="{{ asset($proyecto->foto2) }}" width="100" height="100"></td>
           <td><img src="{{ asset($proyecto->foto3) }}" width="100" height="100"></td>
           <td><img src="{{ asset($proyecto->foto4) }}" width="100" height="100"></td>
           <td><img src="{{ asset($proyecto->foto5) }}" width="100" height="100"></td>
           <td><img src="{{ asset($proyecto->foto6) }}" width="100" height="100"></td>
           <td><a class="btn btn-success"  href="{{ route('proyecto.edit', $proyecto->id)}}">Editar</a></td>
           <td>
               <form action="{{ route('proyecto.destroy',$proyecto->id)}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button onclick="return confirm('Esta seguro que desea eliminar Proyectos :  {{$proyecto->titulo}}')" class="btn btn-danger">Eliminar</button>
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
