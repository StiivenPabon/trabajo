@extends('home')

@section('cont')
<div class="conten-form">
    <form method="POST" action="{{ route('sub.update', $subcategory->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="number" class="form-control" id="exampleText" disabled placeholder="{{ $subcategory->id }}">
            <label for="exampleInputEmail1">Nombre Subcategoría</label>
            <input type="text" class="form-control" id="exampleText" value="{{ $subcategory->name }}" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Descripción</label>
            <textarea class="form-control" id="exampleText" name="description" rows="4">{{ $subcategory->description }}</textarea>
        </div>
        <div>
        <select class="custom-select" id="inputGroupSelect01" name="category_id">
            <option  disabled>Selecciona</option>
            @foreach ($category as $categorys)
            @if ($categorys->id == $subcategory->category_id)
            <option  value="{{$categorys->id }}">{{$categorys->name}}</option>
             @else
            <option value="{{$categorys->id}}">{{$categorys->name}}</option>
            @endif 
            @endforeach
        </div>
          </select>
        <div class="form-group d-flex justify-content-between">
            <button type="submit" class="btn btn-primary mr-1">Actualizar Subcategoría</button>
            <button type="button" class="btn btn-danger">Cancelar actualización</button>
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

@endsection
