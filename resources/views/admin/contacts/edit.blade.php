@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Editar Administração: {{$sponsor->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($sponsor,['route'=>['admin.sponsors.update',$sponsor->id]]) !!}

        @include('admin.sponsors.partial._form')

        <div class="form-group">

            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}
 </div>


@endsection