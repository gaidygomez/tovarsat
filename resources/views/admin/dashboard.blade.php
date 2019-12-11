<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  
@include('layouts.head')

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">
  <!-- Main Header -->
  @include('layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <i class="far fa-address-card"></i>
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <!-- Status -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
          <li><a href="{{ route('home') }}"><i class="fas fa-home"></i><span style="padding-left: .75rem;">Inicio</span></a></li>
          @if (auth()->user()->is_admin)
            <li><a href="{{ route('admRegister') }}"><i class="fas fa-user-plus"></i><span style="padding-left: .6rem;">Registrar Usuario</span></a></li>
            <li><a href="{{ route('listuser') }}"><i class="fas fa-address-book"></i><span style="padding-left: 1.2rem;">Listar Clientes</span></a></li>
            <li><a href="{{ route('listpay') }}"><i class="fas fa-search-dollar"></i><span style="padding-left: 1.2rem;">Listar Pagos</span></a></li>
            <li><a href="{{ route('export') }}"><i class="fas fa-file-excel"></i><span style="padding-left: 1.2rem;">Generar EXCEL</span></a></li>
          @else
            <li><a href="{{ route('debt') }}"><i class="fas fa-donate"></i><span style=" padding-left: 1rem;">Consultar Saldo</span></a></li>
            <li><a href="{{ route('pay') }}"><i class="fa fa-money"></i><span style=" padding-left: 1rem;">Pago en Línea</span></a></li>
            <li><a href="{{ route('history') }}"><i class="fa fa-history"></i><span style=" padding-left: 1rem;">Historicos de Pagos</span></a></li>
            <li><a href="{{ route('buscador') }}"><i class="fa fa-search-dollar"></i><span style=" padding-left: 1rem;">Buscar Pagos</span></a></li>
          @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema de Pagos en Línea de Tovarsat C.A
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')

      @yield('listuser')

      @yield('saldo')

      @yield('nopagar')

      @yield('pagar')

      @yield('provincial')
      
      @yield('ppagos')

      @yield('history')

      @yield('invoice')
      
      @yield('buscar')

      @yield('registrar')

      @yield('listpay')

      @yield('edit-user')
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 1994 <a href="#">Tovarsat C.A</a>.</strong> All rights reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="{{ asset('admin/bower_components/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin/bower_components/datatables/js/dataTables.bootstrap.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $('#history').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>

<script>
  $(function () {
    $('#list-user').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>

<script>
  $(function () {
    $('#table-hotSearch').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>

<script>
  $(function () {
    $('#payment').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>

<script>

const buscador = document.querySelector('#resultados')

function traer() {

  var valor = document.getElementById("hotSearch").value

  if(valor.length >=2){
    fetch(`{{route("hotSearch")}}?hotSearch=${valor}`)
    .then(response => response.json())
    .then(tabla)
  }else{
    resultados.innerHTML = ''
  }
}

function tabla(data) {

  const options = { weekday: 'short', year: 'numeric', month: 'long', day: 'numeric' };

  for(let datos in data){

    var date = new Date(data[datos].created_at)
    var mydate = date.toLocaleDateString("es-ES", options)
    
    resultados.innerHTML += `
      <tr>
        <td>${data[datos].bank}</td>
        <td>${data[datos].brn}</td>
        <td>${data[datos].amount}</td>
        <td>${mydate}</td>
      </tr>
    `
  }
}
</script>
</body>
</html>