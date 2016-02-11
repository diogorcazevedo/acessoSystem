@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Novo Aviso</h3>
        <hr class="hrstyle">

        @include('errors._check')

    {!! Form::open(['route'=>'admin.warnings.store']) !!}

        @include('admin.warnings.partial._form')

        <div class="form-group">

            {!! Form::submit('Criar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}
 </div>


@endsection