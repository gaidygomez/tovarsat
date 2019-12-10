@extends('admin.dashboard')

@section('saldo')
    @empty($saldo_merida)
        @if ($saldo_tovar[0]->notsaldo != 0)
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-money"></i>

                            <h3 class="box-title">Su consulta de deuda.</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <dl>
                                <dt>Gracias por consultarnos.</dt>
                                <dd>Sr(a) {{ $saldo_tovar[0]->Nombre1. " ". $saldo_tovar[0]->Apellido1 }} </dd>
                                <dd> C.I: {{ $saldo_tovar[0]->Cedula }} </dd>
                                <dd>Su número de contrato es: {{ $saldo_tovar[0]->numcuenta }} </dd>
                                <dt>Hasta la fecha: {{ Carbon\Carbon::parse($saldo_tovar[0]->notfching)->format('d/m/Y') }}</dt>
                                @foreach ($monto_tovar as $item)
                                    <dt>La deuda de sus servicios son: {{ number_format($item, 2, ',', '.') }} Bs. </dt>
                                @endforeach
                                <dt>Nos alegra informarle que no presenta deuda acumulada con nosotros. </dt>
                            </dl>
                        </div>
                        <!-- /.box-body -->
                    </div>
                <!-- /.box -->
                </div>
            <!-- ./col -->
            </div>
        @else
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-money"></i>

                            <h3 class="box-title">Su consulta de deuda.</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <dl>
                                <dt>Gracias por consultarnos.</dt>
                                <dd>Sr(a) {{ $saldo_tovar[0]->Nombre1. " ". $saldo_tovar[0]->Apellido1 }} </dd>
                                <dd> C.I: {{ $saldo_tovar[0]->Cedula }} </dd>
                                <dd>Su número de contrato es: {{ $saldo_tovar[0]->numcuenta }} </dd>
                                <dt>Hasta la fecha: {{ Carbon\Carbon::parse($saldo_tovar[0]->notfching)->format('d/m/Y') }}</dt>
                                @foreach ($monto_tovar as $item)
                                    <dt>La deuda de sus servicios son: {{ number_format($item, 2, ',', '.') }} Bs. </dt>
                                @endforeach
                            </dl>
                        </div>
                        <!-- /.box-body -->
                    </div>
                <!-- /.box -->
                </div>
            <!-- ./col -->
            </div>
        @endif
    @endempty

    @empty($saldo_tovar)
    
        @if ($saldo_merida[0]->notsaldo != 0)
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-money"></i>

                            <h3 class="box-title">Su deuda con nosotros.</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <dl>
                                <dt>Gracias por consultarnos.</dt>
                                <dd>Sr(a) {{ $saldo_merida[0]->Nombre1. " ". $saldo_merida[0]->Apellido1 }}</dd>
                                <dd>C.I: {{ $saldo_merida[0]->Cedula }} </dd>
                                <dd>Su número de contrato con nosotros es: {{ $saldo_merida[0]->numcuenta }} </dd>
                                <dt>Hasta la fecha: {{ Carbon\Carbon::parse($saldo_merida[0]->notfching)->format('d/m/Y') }}</dt>
                                @foreach ($monto as $item)
                                    <dt>La deuda de sus servicios son: {{ number_format($item, 2, ',', '.') }} Bs. </dt>
                                @endforeach
                                <dt>Nos alegra informarle que no presenta deuda acumulada con nosotros. </dt>
                            </dl>
                        </div>
                        <!-- /.box-body -->
                    </div>
                <!-- /.box -->
                </div>
            <!-- ./col -->
            </div>
        @else
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-money"></i>

                            <h3 class="box-title">Su deuda con nosotros.</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <dl>
                                <dt>Gracias por consultarnos.</dt>
                                <dd>Sr(a) {{ $saldo_merida[0]->Nombre1. " ". $saldo_merida[0]->Apellido1 }}</dd>
                                <dd>C.I: {{ $saldo_merida[0]->Cedula }} </dd>
                                <dd>Su número de contrato con nosotros es: {{ $saldo_merida[0]->numcuenta }} </dd>
                                <dt>Hasta la fecha: {{ Carbon\Carbon::parse($saldo_merida[0]->notfching)->format('d/M/Y') }}</dt>
                                @foreach ($monto as $item)
                                    <dt>La deuda de sus servicios son: {{ number_format($item, 2, ',', '.') }} Bs. </dt>
                                @endforeach
                            </dl>
                        </div>
                        <!-- /.box-body -->
                    </div>
                <!-- /.box -->
                </div>
            <!-- ./col -->
            </div>
        @endif
        
    @endempty
    
@endsection