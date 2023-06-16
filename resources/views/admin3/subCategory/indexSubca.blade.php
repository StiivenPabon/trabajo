@extends('home')
@section('cont')
<div class="content-wrapper">
    <table id= "subcategorias" class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre  Subcategoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
         <tbody>
          @foreach ($subcategorias as $subcategoria) 
            <tr>
                <td>{{ $subcategoria->name }}</td>
                <td>{{ $subcategoria->description}}</td>
                <td>{{$subcategoria->cname}}</td>
                <td>
                    <div class="d-inline">
                        <a class="btn btn-info mr-1" href="{{route('sub.edit',$subcategoria->id) }}">Editar</a>
                        <form method="POST" action="{{ route('sub.destroy', $subcategoria->id) }}" style="display: inline;">
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
    </table>
@endsection

    
    




@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
$(document).ready(function () {
    $('#subcategorias').DataTable({
          "lengthMenu":[[5,10,50,-1],[5,10,50,"all"]]
    });
});
    </script>
    @endsection

  

    <a class="btn btn-outline-primary" href="{{ route('sub.create') }}">Crear Subcategooria</a>
</div>
@stop
