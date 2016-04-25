@extends('layouts.client.app')

@section('content')
        <hr class="hrstyle">
        <p class="text-uppercase">Solicitar Isenção: <span class="btn btn-default"><b>{{$user->name}}</b></span></p>
        <hr class="hrstyle">
        <br/>
        <div class="panel panel-default">
            <div class="panel-body">
                @include('errors._check')
                {!! Form::model($user,['route'=>['frees.store',$entry->id]]) !!}

                @include('clients.frees.partial._form')

                <div class="form-group">
                    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close()!!}
            </div>
        </div>
@endsection