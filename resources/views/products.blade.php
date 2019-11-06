<div id="detail-prod" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productGrid">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content-tv">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span>

                </button>
                 <h4 class="modal-title position-fixed" id="productGrid">Televisión</h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/remote-control.jpg') }}" class="img-fluid" alt="a">
                    </div>
                    <div class="col-lg-7">
                        <div class="tabbable">
                            <nav>
                              <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Servicio</a>
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-home" aria-selected="true">Contrata</a>
                              </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<p class="text-justify col-11">Ponemos a su disposición mas de 70 canales análogos y más de 10 Digitales incluidos canales de Alta Definición, en los que la educación, el entretenimiento, los deportes, las noticias y lo mejor de las películas se destacan entre las preferencias de los televidentes. </p>
<p class="text-justify col-11">Compitiendo con el satélite por el mercado de los abonados a la televisión de pago, facilita aproximadamente los mismos servicios que esta, como paquetes a medida según un pago por suscripción, los cuales incluyen determinados canales temáticos o generalistas. Facilitando la interactividad con los servicios televisivos.</p>
<p class="text-justify col-11">Para poder disfrutar de las emisiones y los servicios añadidos, los usuarios deben disponer de un aparato decodificador</p>
                              </div>
                              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
<form method="POST" action="{{ route('tv') }}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Introduzca Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="ejemplo@ejemplo.com" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Introduzca sus Datos</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y Apellido" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Teléfono de Contacto</label>
    <input type="tel" name="tel" class="form-control" id="tel" placeholder="Local o Célular: 0414-1234567/0271-2345678" pattern="[0-9]{4}-[0-9]{7}" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecione Plan</label>
    <select class="form-control" name="plan" id="plan">
      <option>Análogo</option>
      <option>Digital</option>
    </select>
  </div>  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecione sucursal</label>
    <select class="form-control" name="office" id="office">
      <option>Mérida</option>
      <option>Ejido</option>
      <option>Tovar</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Dirección</label>
    <textarea type="text" name="direction" class="form-control" id="direction" placeholder="Av, Calle, y Número de Casa" required></textarea>
  </div>
  <div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LexJLkUAAAAAO4eZqIGp_7UtLxi0QUy91K6pZxC"></div>
  </div>
  <button type="submit" class="btn btn-primary float-right">Enviar</button>
</form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<div id="detail-prod1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productGrid">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content-inter">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span>

                </button>
                 <h4 class="modal-title position-fixed" id="productGrid">Internet</h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/inter-b1.jpg') }}" class="img-fluid" alt="a">
                    </div>
                    <div class="col-lg-7">
                        <div class="tabbable">
                            <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">Servicio</a>
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-contact1" role="tab" aria-controls="nav-home" aria-selected="true">Contrata</a>
                              </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">
<p class="text-justify col-11">Los usuarios están a un click de los sitios web donde pueden navegar, encontrar información educativa además de trabajar, entretenerse, comunicarse, expresarse y mucho más de forma rápida y cómoda.

Disponemos de los mejores planes del mercado:
</p>

<ul class="text-justify" >
  <li>Plan Súper: con una velocidad de 1 Mb de navegación.</li>
  <li>Plan Avanzado: con una velocidad de 1.5 Mb de navegación.</li>
  <li>Plan Mega: con una velocidad de 2 Mb de navegación.</li>
</ul>
                              </div>
                              <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab">
<form method="POST" action="{{ route('inter') }}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Introduzca Email</label>
    <input type="email" name="inter_email" class="form-control" id="inter_email" placeholder="ejemplo@ejemplo.com" required="required">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Introduzca sus Datos</label>
    <input type="text" name="inter_name" class="form-control" id="inter_name" placeholder="Nombre y Apellido" required="required">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Teléfono de Contacto</label>
    <input type="tel" name="inter_tel" class="form-control" id="inter_tel" placeholder="Local o Célular: 0414-1234567/0271-2345678" pattern="[0-9]{4}-[0-9]{7}" required="required">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Selecione sucursal</label>
    <select class="form-control" name="inter_office" id="inter_office">
      <option>Mérida</option>
      <option>Ejido</option>
      <option>Tovar</option>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Selecione Plan</label>
    <select class="form-control" name="inter_plan" id="inter_plan">
      <option>Súper</option>
      <option>Avanzado</option>
      <option>Mega</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Dirección</label>
    <textarea type="text" name="inter_direction" class="form-control" id="inter_direction" placeholder="Av, Calle, y Número de Casa" required="required"></textarea>
  </div>
  <div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LexJLkUAAAAAO4eZqIGp_7UtLxi0QUy91K6pZxC"></div>
  </div>
  <button type="submit" class="btn btn-primary float-right">Enviar</button>
</form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->

<div id="detail-prod2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productGrid">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content-coor">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span>

                </button>
                 <h4 class="modal-title position-fixed" id="productGrid">Corporativo</h4>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/fibra-b.jpg') }}" class="img-fluid" alt="a">
                    </div>
                    <div class="col-lg-7">
                        <div class="tabbable">
                            <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true">Servicio</a>
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-home" aria-selected="true">Contrata</a>
                              </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab">
<p class="text-justify col-11">Una de las soluciones empresariales más vanguardistas del mercado, que le permite la transferencia de datos y video a través de enlaces de fibra óptica.

Consolide su posición como empresa de vanguardia con un servicio dedicado que le permite estar conectado siempre.</p>
<p class="text-justify col-11">Basado en la transmisión de luz a través de un cable.  Toda la conexión desde la central hasta el cliente es de fibra óptica.  No importa cuántos clientes estén conectados en la misma zona, el ancho de banda no se verá afectado.</p>
<p class="text-justify col-11">Esta tecnología no sufre interferencias ocasionadas por los cambios de tensión, temperatura, u otros cables, ni pérdidas en función de la distancia a la central, como ocurre con el ADSL. También ofrece el nivel de seguridad más alto</p>
                              </div>
                              <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
<form method="POST" action="{{ route('coor') }}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email de Contacto</label>
    <input type="email" name="coor_email" class="form-control" id="coor_email" placeholder="ejemplo@ejemplo.com" required="required">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Teléfono de Contacto</label>
    <input type="tel" name="coor_tel" class="form-control" id="coor_tel" placeholder="Local o Célular: 0414-1234567/0271-2345678" pattern="[0-9]{4}-[0-9]{7}" required="required">
  </div>  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Introduzca sus Datos</label>
    <input type="text" name="coor_name" class="form-control" id="coor_name" placeholder="Nombre y Apellido" required="required">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Dirección</label>
    <textarea type="text" name="coor_direction" class="form-control" id="coor_direction" placeholder="Av, Calle, y Número de Casa" required="required"></textarea>
  </div>
  <div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LexJLkUAAAAAO4eZqIGp_7UtLxi0QUy91K6pZxC"></div>
  </div>
  <button type="submit" class="btn btn-primary float-right">Enviar</button>

</form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
