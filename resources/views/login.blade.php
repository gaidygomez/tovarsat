<div id="login" class="modal fade">
  <div class="modal-dialog modal-login modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Sistema de Pago</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input id="email" type="email" class="form-control" name="email" placeholder="Usuario" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-7">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Recordar sesión.
                    </label>
                </div>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Ingresar</button>
          </div>
          @if (Route::has('password.request'))
            <p class="hint-text"><a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a></p>
          @endif

          <p class="hint-text"><a href="{{ route('options') }}"> Registrarse</a></p>

        </form>
      </div>
    </div>
  </div>
</div>     
