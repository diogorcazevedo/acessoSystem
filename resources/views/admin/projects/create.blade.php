@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Novo Edital</h3>
        <hr class="hrstyle">

        @include('errors._check')

    {!! Form::open(['route'=>'admin.projects.store']) !!}

        @include('admin.projects.partial._form')

        <div class="form-group">

            {!! Form::submit('Criar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}
 </div>


@endsection