@extends('admin.dashboard')

@section('listuser')
<div class="row">
        <div class="col-xs-12">
          @if (session()->has('msg'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fa fa-check"></i>{{ session()->get('msg') }}</h5>
            </div>
          @elseif(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fa fa-warning"></i>{{ session()->get('delete') }}</h5>
            </div>
          @endif
          <div class="box" style="margin-bottom: 7px;">
            <div class="box-header">
              <h3 class="box-title">Listado de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="list-user" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nombre y Apellido</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->ci}} </td>
                      <td>{{$user->email}} </td>
                      <td><a href="{{ route('edit.user', ['id' => $user]) }}" class="btn btn-primary"> Editar</a></td>
                    </tr>    
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
          {{ $users->links() }}
        <span style="display: flex;">Se muestran {{ $users->count() }} elementos de {{ $users->total() }} en total</span>
    </div>
</div>
@endsection
