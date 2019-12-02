@extends('admin.dashboard')

@section('buscar')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools">
                    <div class="input-group">
                        <input type="text" name="search" id="hotSearch" class="form-control" style="width: 500px; border-radius: 3px;" placeholder="Introduzca alguna referencia para buscar su pago">
                        <span class="input-group-btn">
                            <button type="submit" id="search-btn" class="btn btn-flat" onclick="traer()"><i class="fa fa-search"> Buscar</i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Banco al que hizo la Transferencia</th>
                        <th>Referencia Bancaria</th>
                        <th>Monto de la Transferencia</th>
                        <th>Fecha de Transacción</th>
                    </tr>
                </thead>
                <tbody id="resultados">
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
    
@endsection