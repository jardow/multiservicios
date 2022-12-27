
@extends('adminlte::page')
@section('title', 'Multiservicios - Acercade')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Multiservicios - Acerca de</h1>

    </div>
    <div class="card-body">
        @include('custom.message')

    <h2>Acerca de </h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Acercade</th>
            <th scope="col">imagen</th>
            <th scope="col">Misión</th>
            <th scope="col">imagen</th>



        </thead>
        <tbody>

            @foreach ($acercade as $acer )
          <tr>
            <td>{{ $acer->acercade }}</td>
            <td> <img src="{{ asset($acer->foto1) }}" width="100" height="100"></td>
            <td>{{ $acer->mision }}</td>
            <td> <img src="{{ asset($acer->foto2) }}" width="100" height="100"></td>
        </tr>

        <tr>
            <th scope="col">Visón</th>
            <th scope="col">imagen</th>
            <th scope="col">Valores</th>
            <th scope="col">imagen</th>
        </tr>

        <tr>
            <td>{{ $acer->vision }}</td>
            <td> <img src="{{ asset($acer->foto3) }}" width="100" height="100"></td>
            <td>{{ $acer->valores }}</td>
            <td> <img src="{{ asset($acer->foto4) }}" width="100" height="100"></td>
        </tr>


          @endforeach


        </tbody>
      </table>


    </div>

    <center><a class="btn btn-success" href="{{ route('acercade.edit', $acer->id) }}">Editar</a></center>

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
