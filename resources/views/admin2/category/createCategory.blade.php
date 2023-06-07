@extends('home')

@section('cont')
  <div class="conten-form">

    <form method="POST" action="{{ route('categorys.store') }}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre Categoría</label>
          <input type="text" class="form-control" id="exampleText" placeholder="Categoría" name="name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Descripción</label>
          <textarea class="form-control" id="exampleText" placeholder="Describe la categoría" name="description" rows="4"></textarea>
        </div>
        <div class="form-group d-flex justify-content-between">
          <button type="submit" class="btn btn-primary mr-1">Agregar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
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
