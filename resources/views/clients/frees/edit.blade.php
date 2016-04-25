@extends('layouts.client.app')

@section('content')
    <hr class="hrstyle">
    <p class="text-uppercase">Recurso Isenção: <span class="btn btn-default"><b>{{$free->nome}}</b></span></p>
    <hr class="hrstyle">
    <br/>
        <div class="panel panel-default">
            <div class="panel-body">
                @include('errors._check')
                {!! Form::model($free,['route'=>['frees.update',$free->id]]) !!}

                @include('clients.frees.partial._form_edit')

                <div class="form-group">
                    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close()!!}
            </div>
        </div>
@endsection