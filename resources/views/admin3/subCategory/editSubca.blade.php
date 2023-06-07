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
                <label for="exampleInputPassword1">Cataegoria</label>
                <select class="custom-select" id="inputGroupSelect01" name="category_id">
                    <option disabled>Selecciona</option>
                    @foreach ($category as $categorys)
                        @if ($categorys->id == $subcategory->category_id)
                            <option value="{{ $categorys->id }}" selected>{{ $categorys->name }}</option>
                        @else
                            <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            <div class="form-group mt-3 d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mr-1">Actualizar Subcategoría</button>
                <button type="button" class="btn btn-danger">Cancelar actualización</button>
            </div>
        </form>
    </div>

     {{-- /*/ mt-3 ayuda a separar los botones verticalmente /*/ --}}

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

@endsection
