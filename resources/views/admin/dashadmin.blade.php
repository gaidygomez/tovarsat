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
          <!-- /.row -->
      </div>
    </div>
      <!-- /.widget-user -->
</div>
    <!-- /.col -->
@endsection