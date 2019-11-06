@extends('admin.dashboard')

@section('content')

<div class="row">
	<div class="col-md-5">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-aqua-active">
          <h3 class="widget-user-username">{{auth()->user()->name}}</h3>
          <h5 class="widget-user-desc">{{auth()->user()->email}}</h5>
        </div>
	        <div class="widget-user-image">
	        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header"></h5>
                <span class="description-text"></span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header">{{auth()->user()->contract}}</h5>
                <span class="description-text">Contrato</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
              <div class="description-block">
                <h5 class="description-header"></h5>
                <span class="description-text"></span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.widget-user -->
    </div>
    <!-- /.col -->


  <div class="col-md-6 col-sm-6 col-xs-12">
		<!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>
@endsection