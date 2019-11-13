@extends('admin.dashboard')

@section('saldo')

    @empty($saldo_merida)
        
        <div class="row">
            <div class="col-md-5">
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
                            <dt>Su deuda acumulada con nosotros es de: {{ $saldo_tovar[0]->nottotmonto }} Bs. </dt>
                        </dl>
                    </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>
        <!-- ./col -->
        </div>
    @endempty

    @empty($saldo_tovar)
        
        <div class="row">
            <div class="col-md-5">
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
                            <dt>Su deuda acumulada con nosotros es de: {{ $saldo_merida[0]->nottotmonto }} Bs. </dt>
                        </dl>
                    </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>
        <!-- ./col -->
        </div>
    @endempty
    
@endsection