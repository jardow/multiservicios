      <!-- Team-->
      <section class="page-section bg-light" id="team">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">NUESTRO EQUIPO</h2>
                  <h3 class="section-subheading text-muted">Podemos conocer cualidades, habilidades
                      de cada integrante, ya que es fundamental</h3>
              </div>
              <div class="row">
                  @php
                      $equipos = DB::table('equipos')->get();

                  @endphp

                  @foreach ($equipos as $equipo)
                      <div class="col-lg-4">
                          <div class="team-member">
                              <img class="mx-auto rounded-circle" src="{{ asset($equipo->foto) }}" alt="..." />
                              <h4>{{ $equipo->nombres }}</h4>
                              <p class="text-muted">{{ $equipo->habilidad }}</p>
                              <a href="#!" aria-label="Parveen Anand Twitter Profile"></a>
                              <h1 class="">
                                  <a class=""
                                      @php
$mensaje="https://wa.me/+593".$equipo->contacto."?text=".$equipo->mensaje."";
@endphp
                                      href="{{ URL::to($mensaje) }}" aria-label="">
                                      <i class="fa-brands fa-whatsapp"></i></a>
                              </h1>
                              <a href="#!" aria-label="Parveen Anand LinkedIn Profile"></a>
                          </div>
                      </div>
                  @endforeach


              </div>

              <!--
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
            -->
          </div>
      </section>
