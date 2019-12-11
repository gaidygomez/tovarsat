@extends('admin.dashboard')

@section('registrar')

<div class="register-box">

  <div class="register-box-body">
    @if (session()->has('crear'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fa fa-check"></i>{{ session()->get('crear') }}</h5>
        </div>    
    @endif
    <p class="login-box-msg">Registrar un nuevo Usuario</p>

    <form action="{{ route('postRegister') }}" method="post">
    @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Nombre Completo">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="ci" placeholder="Cédula">
        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
        @error('ci')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group">
        <label>Rol del Usuario</label>
        <select class="form-control" name="role" >
            <option>Usuario</option>
            <option>Administrador</option>
            </select>
        </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Repita password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection