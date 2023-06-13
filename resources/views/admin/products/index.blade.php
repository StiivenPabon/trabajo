


@extends('home')
@section('cont')

<div class="content-wrapper">
    <h4>Tabla De Productos</h4>
    <table id="productos" class="table table-dark">
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
                <td>{{ $registro->cname }}</td>
                <td>{{ $registro->subname }}</td>
                <td>
                    <div class="d-inline">
                        <a class="btn btn-info mr-1" href="{{ route('products.edit', $registro->id) }}">Editar</a>
                        <form method="POST" class="delete" action="{{ route('products.destroy', $registro->id) }}"
                            style="display: inline;">
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
</div>

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#productos').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "all"]
            ]
        });

        $('.delete').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Seguro Quieres eliminar este Registro?',
                text: "No podrás revertir este cambio",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, estoy seguro!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado Exitosamente!',
                        'Registro eliminado.',
                        'success'
                    ).then(() => {
                        $(this).off('submit').submit();
                    });
                }
            });
        });
    });
</script>
@endsection

@stop




{{-- @extends('home')
@section('cont')


    <div class="content-wrapper">
        <h4>Tabla De Productos</h4>
        <table id="productos" class="table table-dark">
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
                        <td>{{ $registro->cname }}</td>
                        <td>{{ $registro->subname }}</td>
                        <td>
                            <div class="d-inline">
                                <a class="btn btn-info mr-1" href="{{ route('products.edit', $registro->id) }}">Editar</a>
                                <form method="POST" class="delete" action="{{ route('products.destroy', $registro->id) }}"
                                    style="display: inline;">
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

    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#productos').DataTable({
                    "lengthMenu": [
                        [5, 10, 50, -1],
                        [5, 10, 50, "all"]
                    ]
                });
            });
        </script>
    @endsection

    <a class="btn btn-outline-primary" href="{{ route('products.create') }}">Crear Productos</a>
</div>

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

@endsection

@section('ajax')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')=='Registro eliminado exitosamente.')
      

<script>
    Swal.fire(
  'Eliminado Exitosamente!',
   'Registro eliminado.',
   'cargado '
    )
</script>


@endif
<script>

         
    $('delete').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Seguro Quieres eliminar este Registro?',
            text: "no podrás revertir este cambio",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, estoy seguro!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    this.submit();
                );

               
            }
        });
    });

</script>


@endsection

@stop

 --}}
