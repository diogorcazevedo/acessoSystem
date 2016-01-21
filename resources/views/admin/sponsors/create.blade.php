@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Nova Administração</h3>
        <hr class="hrstyle">

        @include('errors._check')

    {!! Form::open(['route'=>'admin.sponsors.store']) !!}

        @include('admin.sponsors.partial._form')

        <div class="form-group">

            {!! Form::submit('criar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}
 </div>


@endsection