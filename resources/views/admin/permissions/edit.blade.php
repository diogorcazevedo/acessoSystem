@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Editar Permissão: {{$permission->name}}</h4>
        <hr class="hrstyle">


        @include('errors._check')


    {!! Form::model($permission,['route'=>['admin.permissions.update',$permission->id]]) !!}

        @include('admin.permissions.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close()!!}
    </div>


@endsection