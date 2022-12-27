@php
$portadas = DB::table('portadas')->get();
@endphp
@foreach ($portadas as $portada)
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset($portada->logo) }}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">{{ $portada->titulo1 }}</div>
            <div class="masthead-heading text-uppercase">{{ $portada->titulo2 }}</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Más Información</a>
        </div>
    </header>
    @endforeach
