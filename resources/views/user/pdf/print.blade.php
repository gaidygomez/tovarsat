<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pago en Linea Tovarsat</title>

    <link rel="icon" type="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-96x96.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.css') }}">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/b7de1e60dc.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.css') }}">
  <!-- Datatables -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables/css/dataTables.bootstrap.css"') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/skin-blue.css') }}">
  <link rel="stylesheet" href="{{ asset('css/alert.css') }}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
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
              <td>{{$id->comment}} </td>
              <td>{{$id->bank}}</td>
              <td>{{$id->created_at->translatedFormat('l, d F Y')}}</td>
              <td>{{number_format($id->amount, '2', ',', '.')}} </td>
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
                <td>{{number_format($id->amount, '2',',','.')}}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
</section>    
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>