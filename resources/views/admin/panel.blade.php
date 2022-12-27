
@extends('adminlte::page')
@section('title', 'Administrador')

@section('plugins.Sweetalert2', true)
@section('content_header')

@stop

@section('content')

<div class="card">
    <div class="card-header">
    <h1 class="card-title">Panel Administrativo</h1>
    </div>
    <div class="card-body">
        <center>  <div class="row row-cols-12">
            <img  class="img-fluid" src="{{asset('theme/assets/img/Servicios.png')}}" align=”middle”>
        </div>


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

