@extends('home')
@section('cont')
<div class="content-wrapper">
    <table class="table table-dark">
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
    </table>

    <a class="btn btn-outline-primary" href="{{ route('categorys.create') }}">Crear Categooria   </a>
</div>

@stop