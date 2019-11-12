@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifique su Cuenta de Correo Electrónico.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <p>Un link de verificación se ha enviado a su correo.</p>
                        </div>
                    @endif

                    <p>Antes de proceder, debe verificar su cuenta.</p>
                    <p>Si no ha recibido ningún enlace de verificación</p> <a href="{{ route('verification.resend') }}"><span>Presione aquí para que se le envíe otro.</span></a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
