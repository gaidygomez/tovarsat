@extends('admin.dashboard')

@section('history')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools">
                </div>
            </div>
            <div class="box-body">
            <table id="history" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Banco al que hizo la Transferencia</th>
                        <th>Referencia Bancaria</th>
                        <th>Monto de la Transferencia</th>
                        <th>Fecha de Transacción</th>
                        <th>Comentario</th>
                        <th>Estado de su Pago</th>
                    </tr>
                </thead>
                <tbody id="resultados">
                    @foreach ($saldos as $item)
                        <tr>
                            <td>{{$item->bank}}</td>
                            <td> <a href="{{ route('invoice', ['id'=>$item]) }}"> {{$item->brn}} </a></td>
                            <td>{{number_format($item->amount, '2', ',', '.')}}</td>
                            <td>{{Carbon\Carbon::parse($item->date)->locale('es')->translatedFormat('d F Y')}}</td>
                            <td>{{$item->comment}}</td>
                            @if ($item->status === 0)
                                <td><span class="label label-warning">Pendiente</span></td>
                            @elseif($item->status === 1)
                                <td><span class="label label-success">Aprobado</span></td>
                            @else
                                <td><span class="label label-warning">Pendiente</span></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        {{ $saldos->links() }}
        <span style="display: flex;">Se muestran {{ $saldos->count() }} elementos de {{ $saldos->total() }} en total</span>
    </div>
</div>
@endsection