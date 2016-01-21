@extends('layouts.admin.app')

@section('content')
    <div style="margin-bottom: 5%;" class="col-lg-offset-2 col-sm-8 padding-right">
        <hr class="hrstyle">
        <h4 class="text-center">Editar Usuário: {{$client->user->name}}</h4>
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
    </div>
@endsection