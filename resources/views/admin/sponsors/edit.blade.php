@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Editar Administração: {{$sponsor->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($sponsor,['route'=>['bancas',$sponsor->id]]) !!}

        @include('admin.sponsors.partial._form')

        <div class="form-group">

            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}
@endsection