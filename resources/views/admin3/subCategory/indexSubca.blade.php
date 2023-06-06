@extends('home')
@section('cont')
<div class="content-wrapper">
    <table class="table table-dark">
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
    </table>

    <a class="btn btn-outline-primary" href="{{ route('sub.create') }}">Crear Categooria   </a>
</div>

@stop