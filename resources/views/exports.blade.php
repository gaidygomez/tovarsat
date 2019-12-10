<table>
    <thead>
        <tr>
        <th>Banco al que se hizo la Transferencia</th>
        <th>Referencia</th>
        <th>Monto</th>
        <th>Fecha en la que hizo la Transferencia</th>
        <th>Usuario</th>
        <th>Cédula</th>
        <th>Sucursal</th>
        <th>Estado del Pago</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pagos as $pago)
            @foreach ($pago->payments as $item)
                @if ($item->created_at <= Carbon\Carbon::now()->subMonth())
                    <p>No hay datos para mostrar</p>
                @else
                    <tr>
                        <td>{{$item->bank}}</td>
                        <td>{{$item->brn}} </td>
                        <td>{{$item->amount}}</td>
                        <td>{{$item->date}}</td>
                        @if ($item->user_id === $pago->id)
                            <td>{{$pago->name}} </td>
                            <td>{{$pago->ci}} </td>
                        @endif
                        <td>{{$pago->address}}</td>
                    </tr> 
                @endif
            @endforeach
        @endforeach
        
    </tbody>
</table>