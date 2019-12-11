@extends('admin.dashboard')

@section('listpay')
<div class="row">
        <div class="col-xs-12">
          @if (session()->has('approved'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fa fa-check"></i><strong>{{ session()->get('approved') }}</strong></h5>
            </div>
          @elseif(session()->has('rejected'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fa fa-warning"></i><strong>{{ session()->get('rejected') }}</strong></h5>
            </div>              
          @endif
          <div class="box" style="margin-bottom: 7px;">
            <div class="box-header">
              <h3 class="box-title">Listado de Pagos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="payment" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Banco al que se hizo la Transferencia</th>
                    <th>Referencia</th>
                    <th>Monto</th>
                    <th>Fecha en la que hizo la Transferencia</th>
                    <th>Usuario</th>
                    <th>Cédula</th>
                    <th>Sucursal</th>
                    <th>Estado</th>
                    <th>Aprobar</th>
                    <th>Rechazar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pagos as $pago)
                    @foreach ($pago->payments as $item)
                      <tr>
                        <td>{{$item->bank}}</td>
                        <td>{{$item->brn}} </td>
                        <td>{{number_format($item->amount, '2', ',', '.')}}</td>
                        <td>{{Carbon\Carbon::parse($item->date)->locale('es')->translatedFormat('d F Y')}}</td>
                        @if ($item->user_id === $pago->id)
                          <td>{{$pago->name}} </td>
                          <td>{{$pago->ci}} </td>
                        @endif
                        <td>{{$pago->address}}</td>
                        @if ($item->status === 0)
                                <td><span class="label label-warning">Pendiente</span></td>
                        @elseif($item->status === 1)
                                <td><span class="label label-success">Aprobado</span></td>
                        @else
                                <td><span class="label label-danger">Rechazado</span></td>
                        @endif
                        <form action="{{ route('aprobar.pagos', ['id'=>$item]) }}" method="post">
                          @csrf
                          @method('put')
                          <td> <button name="approved" class="btn btn-success"> Aprobar</button></td>
                        </form>
                        <form action="{{ route('rechazar.pagos', ['id'=>$item]) }}" method="post">
                          @csrf
                          @method('put')
                          <td> <button name="rejected" class="btn btn-danger"> Rechazar</button></td>
                        </form>
                      </tr> 
                    @endforeach
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
    
@endsection