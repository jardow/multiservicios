    <!-- About-->

  @php

     $acercade=DB::table('acercades')->get();



  @endphp

  @foreach ($acercade as $acer )

  @endforeach

    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quienes Somos</h2>
                <h3 class="section-subheading text-muted">Multiservicios LL.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset($acer->foto1) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"> {{ $acer->acercade }}
 </p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset($acer->foto2) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">Misión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $acer->mision }}</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset($acer->foto3) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">Visión</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">{{ $acer->vision }}</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset($acer->foto4) }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4></h4>
                            <h4 class="subheading">Valores</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">{{ $acer->valores }}</p>

                    </div>
                </li>

            </ul>
        </div>
    </section>
