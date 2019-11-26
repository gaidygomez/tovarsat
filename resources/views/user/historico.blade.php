@extends('admin.dashboard')

@section('history')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Historial de Transacciones</h3>
                <div class="box-tools">
                </div>
            </div>
            <!-- /.box-header -->
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
                    <tbody id="resultados_datatables">
                        @foreach ($saldos as $item)
                            <tr>
                                <td>{{$item->bank}}</td>
                                <td> <a href="{{ route('invoice', ['id'=>$item]) }}"> {{$item->brn}} </a></td>
                                <td>{{number_format($item->amount, '2', ',', '.')}}</td>
                                <td>{{$item->created_at->locale('es')->translatedFormat('d F Y')}}</td>
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
            <!-- /.box-body -->
        </div>
        <div class="row">
            <div class="col-sm-7">
                {{ $saldos->links() }}
                <span style="display: flex;">Se muestran {{ $saldos->count() }} elementos de {{ $saldos->total() }} en total</span>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    window.addEventListener('load',function(){
        document.getElementById("hot_search").addEventListener("keyup", function(){
            if((document.getElementById("hot_search").value.length) >= 1)
            fetch(`live_search?=${document.getElementById("hot_search").value}`, { method:'get' })
                .then( response => response.text())
                .then( html => {document.getElementById("resultados_datatables").innerHTML = html})
            else
                document.getElementById("resultados_datatables").innerHTML = ""
        })
    })
</script> --}}

{{-- <script>
    $(document).ready(function () {
        $("#hot_search").keyup(function () {
            var txt="#hot_search"+$(this).val()
            $.ajax({
                data:txt,
                url:"{{ route('live_search') }}",
                method:'GET',
                dataType:'json',
                success:function (data) {
                    $('#resultados_datatables').html(data);                    
                },
                error: function () {
                    alert("error")                    
                }
            })
        })
    })
</script> --}}
@endsection