@extends('admin.dashboard')

@section('content')

<div class="row">
  

	<div class="col-md-5">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user" style="margin-bottom: 30px;">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">{{auth()->user()->name}}</h3>
          <h5 class="widget-user-desc">{{auth()->user()->email}}</h5>
        </div>
          <!-- /.row -->
      </div>
      <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$users}}</h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
    </div>
      <!-- /.widget-user -->

@if (auth()->user()->is_admin)
  <div class="row" style="display: grid; padding-left: 15rem;">
    <!-- Small boxes (Stat box) -->
        <div class="col-md-8">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$pendiente}}</h3>

              <p>Pagos Pendientes</p>
            </div>
            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-8">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$hechos}}</h3>

              <p>Pagos Aprobados</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-8">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$reject}}</h3>

              <p>Pagos Rechazados</p>
            </div>
            <div class="icon">
              <i class="fas fa-ban"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-8">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$payment}}</h3>

              <p>Pagos Realizados</p>
            </div>
            <div class="icon">
              <i class="fas fa-cash-register"></i>
            </div>
          </div>
        </div>  
  </div>
@endif
</div>



@endsection