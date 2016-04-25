@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Nova Administração</h3>
        <hr class="hrstyle">

        @include('errors._check')

    {!! Form::open(['route'=>'bancas']) !!}

        @include('admin.sponsors.partial._form')

        <div class="form-group">

            {!! Form::submit('Criar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}

@endsection