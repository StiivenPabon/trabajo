@extends('home')
@section('cont')
<div class="content-wrapper">
    <table id="categorias"class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col"> Acciones</th>
            </tr>
        </thead>
         <tbody>
         @foreach ($categorias as $categoria) 
            <tr>
                <td>{{ $categoria->name }}</td>
                <td>{{ $categoria->description}}</td>
                <td>
                    <div class="d-inline">
                        <a class="btn btn-info mr-1" href="{{route('categorys.edit',$categoria->id) }}">Editar</a>
                        <form method="POST" action="{{ route('categorys.destroy', $categoria->id) }}" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
         @endforeach 
        </tbody>

        
   
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

@endsection
  

    </table>

     @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
$(document).ready(function () {
    $('#categorias').DataTable({
          "lengthMenu":[[5,10,50,-1],[5,10,50,"all"]]
    });
});

</script>

 @endsection


    <a class="btn btn-outline-primary" href="{{ route('categorys.create') }}">Crear Categooria   </a>
</div>



@stop