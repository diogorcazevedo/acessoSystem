@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Editar Usuário: {{$client->user->name}}</h4>
        <hr class="hrstyle">
        <div class="panel panel-default">
            <div class="panel-body">
                @include('errors._check')
                {!! Form::model($client,['route'=>['admin.users.update',$client->id]]) !!}

                @include('admin.users.partial._form')

                <div class="form-group">
                    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close()!!}
            </div>
        </div>
@endsection