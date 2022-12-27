      <!-- Contact-->
      <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contáctanos</h2>
                <h1 class="section-subheading text-muted">
                <a class="" 
                href="{{ URL::to('https://wa.me/+5930984243670/?text=Hola, 
                necesito más información acerca de los servicios que brindan. ') }}"
                 aria-label="Parveen Anand Facebook Profile">
                 <i class="fa-brands fa-whatsapp"></i></a></h1>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Su Nombre *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es requerido.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Su Correo *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un correo es requerido.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Correo no es  válido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Su Celular *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un número de celular es requerido.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Su Mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Un mensaje es requerido.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Envío de formulario exitoso!</div>
                      
                        <br />
                    
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>