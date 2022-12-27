        <!-- Team-->
        <section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Nuestro objetivo es brindar una cartera de opciones de servicios
                        en construcción, reparación, personal de asistencia y mano de obra.</h3>
                </div>
                <div class="row">
                    @php
                    $servicios = DB::table('servicios')->get();

                @endphp

                    @foreach ($servicios as $servicio)
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto img-thumbnail" src="{{ asset($servicio->foto) }}" alt="..." />
                            <h5>{{ $servicio->titulo }}</h5>
                            <p class="text-muted">{{ $servicio->descripcion }}</p>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
