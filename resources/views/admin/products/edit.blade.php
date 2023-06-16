@extends('home')

@section('cont')
    <div class="conten-form">
        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @method('PUT')
            @csrf
            <div class="table-borderless table-striped">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" id="exampleText" disabled placeholder="{{ $product->id }}">
                <label for="exampleInputEmail1">Nombre Producto</label>
                <input type="text" class="form-control" id="exampleText" value="{{ $product->name }}" name="name">
                <div class="form-group">
                    <label for="exampleInputPassword1">Precio</label>
                    <input type="number" class="form-control" id="exampleInput" value="{{ $product->price }}" name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cantidad</label>
                    <input type="number" class="form-control" id="exampleInput" value="{{ $product->amount }}" name="amount">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categoría</label>
                    </div>
                    <select class="custom-select form-control" id="inputGroupSelect01" name="category_id">
                        <option disabled>Selecciona</option>
                        @foreach ($category as $categorys)
                            @if ($categorys->id == $product->category_id)
                                <option value="{{ $categorys->id }}" selected>{{ $categorys->name }}</option>
                            @else
                                <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Subcategoría</label>
                    </div>
                    <select class="custom-select form-control" id="inputGroupSelect01" name="subcategory_id">
                        <option disabled>Selecciona</option>
                        @foreach ($subcategory as $subcategorys)
                            @if ($subcategorys->id == $product->subcategorys_id)
                                <option value="{{ $subcategorys->id }}">{{ $subcategorys->name }}</option>
                            @else
                                <option value="{{ $subcategorys->id }}">{{ $subcategorys->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                    <button type="button" class="btn btn-danger ml-5" onclick="cancelarActualizacion()">Cancelar actualización</button>
                </div>
            </div>
        </form>
    </div>
    
@section('js')
    <script>
        function cancelarActualizacion() {
            window.location.href = "{{ route('products.index') }}";
            alert("Actualización cancelada");
        }
    </script>
@endsection

<style>
    .conten-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-group {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        height: 50px;
        box-sizing: border-box;
    }

    .custom-select {
        max-width: 300px;
    }

    .btn {
        width: 100%;
        max-width: 200px;
    }
</style>
@stop
