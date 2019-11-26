@extends('admin.dashboard')

@section('invoice')
<div class="pad margin no-print">
  <div class="callout callout-info" style="margin-bottom: 0!important;">
    <h4><i class="fa fa-info"></i> Note:</h4>
    This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
  </div>
</div>

<section class="invoice">
<!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="{{ asset('img/logo.png') }}" width="120" height="30">
            <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <strong> Comprobante de Registro de Pago</strong>
          <address>
            <strong>Sr(a) {{auth()->user()->name}}</strong><br>
            <strong>C.I: </strong>{{auth()->user()->ci}} <br>
            @empty($data_tov)
              <strong>Número de Contrato: </strong> {{$data->first()->Num_Cliente}} <br> 
            @endempty
            @empty($data)
              <strong>Número de Contrato: </strong> {{$data_tov->first()->Num_Cliente}} <br>
            @endempty
            <strong>Email: </strong> {{auth()->user()->email}}
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Cantidad</th>
              <th>Observación</th>
              <th>Banco al que Transfirió</th>
              <th>Fecha de Operación</th>
              <th>Monto</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>{{$invoice->comment}} </td>
              <td>{{$invoice->bank}}</td>
              <td>{{$invoice->created_at->translatedFormat('l, d F Y')}}</td>
              <td>{{number_format($invoice->amount, '2', ',', '.')}} </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Se imprimió el día: {{Carbon\Carbon::now()->format('d/m/Y')}} </p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Total:</th>
                <td>{{number_format($invoice->amount, '2',',','.')}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ route('imprimir', ['id'=>$invoice]) }}" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Imprimir</a>
        </div>
      </div>
</section>    
@endsection