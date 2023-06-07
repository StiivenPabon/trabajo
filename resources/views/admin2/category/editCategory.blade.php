@extends('home')

@section('cont')
  <div class="conten-form">

    <form method="POST" action="{{ route('categorys.update', $categoria->id) }}">
      @method('PUT')
      @csrf

      <div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="number" class="form-control" id="exampleText" disabled placeholder="{{ $categoria->id }}">
        <label for="exampleInputEmail1">Nombre Categoría</label>
        <input type="text" class="form-control" id="exampleText" value="{{ $categoria->name }}" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Descripción</label>
        <textarea class="form-control" id="exampleText" value="{{ $categoria->description }}" name="description" rows="4"></textarea>
        {{-- !! la categoria no carga el texto ingresado en el registro !! --}}
      </div>
      <div class="form-group d-flex justify-content-between">
        <button type="submit" class="btn btn-primary mr-1">Actualizar Categoria</button>
        <a href={{route('categorys.index')}} type="button" class="btn btn-danger">Cancelar actualización </a>
      </div>
    </form>

  </div> 


<style>
   .conten-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .form-group {
      width: 100%;
      max-width: 400px; 
      margin-bottom: 20px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      box-sizing: border-box;
    }

    .btn {
      width: 100%;
      max-width: 200px; 
    }
</style>

@stop
