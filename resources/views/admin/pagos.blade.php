@extends('admin.dashboard')

@section('listpay')
<div class="row">
        <div class="col-xs-12">
          <div class="box" style="margin-bottom: 7px;">
            <div class="box-header">
              <h3 class="box-title">Listado de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="list-pay" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Banco al que se hizo la Transferencia</th>
                    <th>Referencia</th>
                    <th>Monto</th>
                    <th>Fecha en la que hizo la Transferencia</th>
                    <th>Usuario</th>
                    <th>Cédula</th>
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