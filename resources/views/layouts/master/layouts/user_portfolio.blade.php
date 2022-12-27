     <!-- Portfolio Grid-->
     <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Proyectos</h2>
                <h3 class="section-subheading text-muted">Servicios Realizados.</h3>
            </div>
            <div class="row">


               @php
                   $proyectos=DB::table('proyectos')->get();
               @endphp
               @foreach ($proyectos as $proyecto )


                <!-- Portgfolio1 -->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $proyecto->id }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset($proyecto->foto1) }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                           <div class="portfolio-caption-heading"></div>
                           <div class="portfolio-caption-subheading text-muted">{{ $proyecto->titulo }}</div>
                       </div>
                    </div>
                </div>
                @endforeach



            </div>
    </section>
    @foreach ($proyectos as $proyecto )
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{$proyecto->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img
                        src="{{ asset('theme/assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h5 class="text-uppercase">{{ $proyecto->titulo }}</h5>
                                <p class="item-intro text-muted">{{ $proyecto->ciudad }}</p>

                                <!-- Carousel -->
                                <div id="demo{{$proyecto->id}}" class="carousel slide" data-bs-ride="carousel">

                                    <!-- Indicators/dots -->
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="0"
                                            class="active"></button>
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="1"></button>
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="2"></button>
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="3"></button>
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="4"></button>
                                        <button type="button" data-bs-target="#demo{{$proyecto->id}}" data-bs-slide-to="5"></button>
                                    </div>

                                    <!-- The slideshow/carousel -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset($proyecto->foto1) }}"
                                                alt="Los Angeles" class="d-block" style="width:100%">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset($proyecto->foto2) }}" alt="Chicago"
                                                class="d-block" style="width:100%">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset($proyecto->foto3) }}" alt="New York"
                                                class="d-block" style="width:100%">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset($proyecto->foto4) }}" alt="New York"
                                                class="d-block" style="width:100%">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset($proyecto->foto5) }}" alt="New York"
                                                class="d-block" style="width:100%">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="{{ asset($proyecto->foto6) }}" alt="New York"
                                                class="d-block" style="width:100%">
                                        </div>
                                    </div>

                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#demo{{$proyecto->id}}"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#demo{{$proyecto->id}}"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>

                                <p>{{ $proyecto->descripcion }}</p>



                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                   Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

