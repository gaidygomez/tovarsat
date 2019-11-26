@extends('admin.dashboard')

@section('provincial')    
<div class="col-md-6">   
<!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Formulario de Pago (Sofitasa)</h3>
        </div>
    <!-- /.box-header -->
    <!-- form start -->
        <form role="form" method="POST" action="{{ route('bs_post') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Monto de la Transferencia</label>
                    <input type="text" name="amount" class="form-control" value="{{ old('amount')}}" placeholder="Ingrese el monto de su Transferencia">
                    
                    @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Referencia Bancaria</label>
                    <input type="text" name="brn" class="form-control" value="{{ old('brn')}}" placeholder="Ingrese el número de su referencia">
                    @error('brn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Banco al que hizo la Transferencia </label>
                    <input type="text" name="bank" class="form-control" value="{{$sofitasa->brn}}" readonly>
                    @error('bank')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Puede agregar su comentario </label>
                    <input type="text" name="comment" class="form-control" placeholder="Puede comentarnos algo sobre su transferencia">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Adjunte la captura de su Pago</label>
                    <input type="file" name="file">
                    @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar Pago</button>
            </div>
        </form>
    </div>
</div>
@endsection