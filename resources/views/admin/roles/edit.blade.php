@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Editar Permissão: {{$role->name}}</h4>
        <hr class="hrstyle">


        @include('errors._check')


    {!! Form::model($role,['route'=>['admin.roles.update',$role->id]]) !!}

        @include('admin.roles.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close()!!}

@endsection