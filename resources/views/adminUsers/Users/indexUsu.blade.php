@extends('home')
@section('cont')



    <div class="content-wrapper">
      <h2>Usuarios Registrados</h2>
        <table id="registros" class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->Rol}}</td>
                        <td>
                            <div class="d-inline">
                                <a class="btn btn-info mr-1" href="{{ route('users.edit', $user->id) }}">Editar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>


    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
$(document).ready(function () {
    $('#registros').DataTable({
          "lengthMenu":[[5,10,50,-1],[5,10,50,"all"]]
    });
});
    </script>
    @endsection

  
    @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    @endsection
    
    
@stop

{{-- <div>
        <div class="card">
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>rol </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <div class="d-inline">
                                  <a class="btn btn-info mr-1" href="{{route('users.edit',$user->id) }}">Editar</a>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
