@extends('home')
@section('cont')
<div class="content-wrapper">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
                <th scope="col">Subcategoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
            <tr>
                <td>{{ $registro->name }}</td>
                <td>{{ $registro->price }}</td>
                <td>{{ $registro->amount }}</td>
                <td>{{ $registro->cname}}</td>
                <td>{{$registro->subname}}</td>
                <td>
                    <div class="d-inline">
                        <a class="btn btn-info mr-1" href="{{ route('products.edit', $registro->id) }}">Editar</a>
                        <form method="POST" action="{{ route('products.destroy', $registro->id) }}" style="display: inline;">
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

    <a class="btn btn-outline-primary" href="{{ route('products.create') }}">Crear Productos</a>
</div>

@stop

{{-- @extends('home')
@section ('cont')
<div class="content-wrapper">
  
    <table class="table table-dark">
        <thead>
          <tr>
    
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
              <tr>
                <td>{{$registro->name}}</td>
                <td>{{$registro->price}}</td>
                <td>{{$registro->amount}}</td>
                <td><a class="btn btn-info mr-1" href="{{route('products.edit', $registro->id)}}">Editar</a></td>
                <td> <a  class="btn btn-outline-danger  ml-1" href="">Eliminar</a></td>
              </tr>
          @endforeach
        </tbody>
      </table>

      <a class="btn btn-outline-primary" href="{{route('products.create')}}">Crear Productos</a>
     
    
      
</div>

@stop --}}