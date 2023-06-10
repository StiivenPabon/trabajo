@extends('home')

@section('cont')
  <div class="conten-form">

    <form method="POST" action="{{route('categorys.update',$categoria->id)}}">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="number" class="form-control" id="exampleText" disabled placeholder="{{$categoria->id}}">
          <label for="exampleInputEmail1">Nombre Categoría</label>
          <input type="text" class="form-control" id="exampleText" value="{{$categoria->name}}" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Descripción</label>
          <textarea class="form-control" id="exampleText" value="{{$categoria->description}}" name="description" rows="4"></textarea>
        </div>
        <div class="form-group d-flex justify-content-between">
          <button type="submit" class="btn btn-primary mr-1">Actualizar Categoria</button>
          <button type="button" class="btn btn-danger">Cancelar actualizacion</button>
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
  width: 150%;
  max-width: 500px; 
  margin-bottom: 30px;
}

.btn

.form-control {
  width: 150%;
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






{{-- @extends('home')

@section('cont')
  <div class="conten-form">

    <form method="Post" action="{{route('categorys.update',$categoria->id)}}">
      @method('PUT')
      @csrf
      <div class="table-borderless table-striped">
        <label for="exampleInputEmail1">ID</label>
        <input type="number" class="form-control" id="exampleText" disabled placeholder="{{$categoria->id}}">
        <label for="exampleInputEmail1">Nombre Categoria</label>
        <input type="text" class="form-control" id="exampleText" value="{{$categoria->name}}" name="name">
      <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <input type="number" class="form-control" id="exampleInput" value="{{$categoria->description}}" name="description">
      </div>
      <button type="submit" class="btn btn-primary">Actualiza Categorias</button>
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
 --}}
