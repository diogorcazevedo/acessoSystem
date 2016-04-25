@extends('layouts.admin.app')

@section('content')
    <hr class="hrstyle">
    <h4 class="text-uppercase">Função do Usuário : {{$user->name}}</h4>
    <hr class="hrstyle">


        @include('errors._check')


    {!! Form::model($user,['route'=>['admin.users.updaterole',$user->id]]) !!}

        @include('admin.users.partial._form_role')

        <div class="form-group">

            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
            <a href="{{route('admin.users.index')}}" class="btn btn-orange">Cancelar</a>
        </div>


    {!! Form::close()!!}

@endsection