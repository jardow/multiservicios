@extends('adminlte::page')
@section('title', 'Multiservicios - Acercade')

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
            <form action="{{ route('acercade.update', $acercade->id) }}" method="POST" enctype="multipart/form-data">
                @method('Put')
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Acercade</th>
                            <th scope="col">imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <textarea id="acercade" name="acercade" rows="5" cols="50"> {{ $acercade->acercade }}
      </textarea>
                            </td>
                            <td> <img src="{{ asset($acercade->foto1) }}" width="100" height="100">
                                <input class="form-control" accept="image/png,image/jpeg" type="file" name="f_acercade" id="f_acercade">
                            </td>
                        </tr>

                        <tr>

                            <th scope="col">Misión</th>
                            <th scope="col">imagen</th>
                        </tr>
                        <tr>
                            <td>
                                <textarea id="mision" name="mision" rows="5" cols="50"> {{ $acercade->mision }}
      </textarea>
                            </td>
                            <td> <img src="{{ asset($acercade->foto2) }}" width="100" height="100">
                                <input class="form-control" accept="image/png,image/jpeg" type="file" name="f_mision" id="f_mision">
                            </td>
                        </tr>

                        <tr>
                            <th scope="col">Visón</th>
                            <th scope="col">imagen</th>

                        </tr>

                        <tr>
                            <td>
                                <textarea id="vision" name="vision" rows="5" cols="50"> {{ $acercade->vision }}
      </textarea>
                            </td>
                            <td> <img src="{{ asset($acercade->foto3) }}" width="100" height="100">
                                <input class="form-control" accept="image/png,image/jpeg" type="file" name="f_vision" id="f_vision">
                            </td>
                        </tr>

                        <tr>
                            <th scope="col">Valores</th>
                            <th scope="col">imagen</th>
                        </tr>
                        <tr>

                            <td>
                                <textarea id="valores" name="valores" rows="5" cols="50"> {{ $acercade->valores }}
</textarea>
                            </td>
                            <td> <img src="{{ asset($acercade->foto4) }}" width="100" height="100">
                                <input class="form-control" accept="image/png,image/jpeg" type="file" name="f_valores" id="f_valores">
                            </td>

                        </tr>



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
