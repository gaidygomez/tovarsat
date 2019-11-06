<div class="modal fade" id="ayuda" tabindex="-1" role="dialog" aria-labelledby="ayuda" aria-hidden="true">
  <div class="modal-dialog modal-content modal-lg" role="document">
    <form method="POST" action="{{ route('atencion') }}" class="needs-validation" novalidate>
      @csrf
      <div class="container contact">
        <div class="form-row">
          <div class="col-md-3">
            <div class="contact-info">
              <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
              <h3>Contáctenos</h3>
              <h5>Nosotros le escucháremos.</h5>
            </div>
          </div>
          <div class="col-md-9">
            <div class="contact-form">
              <div class="form-group">
                <label class="control-label col-sm-2" for="fname">Nombre:</label>
                <div class="col-sm-10">          
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Nombre Apellido" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="femail">Correo:</label>
                <div class="col-sm-10">
                <input type="email" name="femail" class="form-control" id="femail" placeholder="ejemplo@ejemplo.com" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2"for="foffice">Sucursal</label>
                <div class="col-sm-10">
                  <select class="form-control" name="foffice" id="exampleFormControlSelect1">
                    <option>Mérida</option>
                    <option>Ejido</option>
                    <option>Tovar</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="comment">Comentario:</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="comment" rows="5" id="comment" placeholder="Con gusto leeremos su comentario" required></textarea>
                </div>
              </div>
              <div class="form-group" style="margin-left: 14px;">
                <div class="g-recaptcha" data-sitekey="6LexJLkUAAAAAO4eZqIGp_7UtLxi0QUy91K6pZxC"></div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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