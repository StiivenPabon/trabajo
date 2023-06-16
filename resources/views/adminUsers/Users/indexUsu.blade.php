@extends('home')

@section('cont')

<div class="content-wrapper">
  <h2>Usuarios Registrados</h2>
  <div class="row">
    @foreach ($users as $user)
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-id">id: {{ $user->id }}</h5>
          <h5 class="card-title">{{ $user->name }}</h5>
          <p class="card-text">Correo: {{ $user->email }}</p>
          <p class="card-text">Rol: {{ $user->roles->pluck ('name')->implode(',')}}</p>
          <div class="d-inline">
            <a class="btn btn-info mr-1" href="{{ route('users.edit', $user->id) }}">Editar</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
