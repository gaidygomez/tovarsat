@extends('admin.dashboard')

@section('pagar')

<div class="col-md-6">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Banco al cual hizo su transferencia</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ route('bs') }}"><i class="fa fa-circle-o text-yellow"></i> Sofitasa</a></li>
                <li><a href="{{ route('bdv') }}"><i class="fa fa-circle-o text-light-blue"></i> Banco de Venezuela</a></li>
                <li><a href="{{ route('mt') }}"><i class="fa fa-circle-o text-light-blue"></i> Mercantil</a></li>
                <li><a href="{{ route('bp') }}"><i class="fa fa-circle-o text-light-blue"></i> Provincial</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection