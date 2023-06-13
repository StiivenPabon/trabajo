@extends('home')
@section('cont')

@if(session('info'))
    <div class="alert alert-success">
       <strong >{{ session('info') }}></strong> 
    </div>
@endif

<div class="content-wrapper" class="container">
    <div class="card mx-auto" class="row justify-content-center">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="name">{{$user->name}}</p>

            <h2 class="h5">Asigna Nuevo Rol</h2>
            
            {!! Form::model($user, ['route'=>['users.update', $user], 'method' => 'put']) !!}
               
                @foreach ($roles as $role)
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'custom-control-input', 'id' => 'role-'.$role->id]) !!}
                            <label class="custom-control-label" for="role-{{$role->id}}">{{$role->name}}</label>
                        </div>
                    </div>
                @endforeach

       
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

