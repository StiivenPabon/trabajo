@extends('home')

@section('cont')

@if(session('info'))
    <div class="alert alert-success">
        <strong>{{ session('info') }}</strong> 
    </div>
@endif

<div class="content-wrapper container">
    <div class="card mx-auto row justify-content-center">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="name">{{ $user->name }}</p>

            <h2 class="h5">Asigna Nuevo Rol</h2>
            
            {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
               
                <div class="form-group">
                    {!! Form::label('role_id', 'Selecciona un rol') !!}
                    {!! Form::select('role_id', $roles->pluck('name' , 'id') , null,['class' => 'form-control', 'placeholder' => 'Selecciona un rol']) !!}
                </div>

                {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                
            {!! Form::close() !!}
        </div>
    </div>
</div>

<style>
    .name {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
    }
</style>

@stop
