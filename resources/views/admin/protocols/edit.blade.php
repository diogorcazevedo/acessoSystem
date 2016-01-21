@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Editar Editais: {{$protocol->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($protocol,['route'=>['admin.protocols.update',$protocol->id]]) !!}

        @include('admin.protocols.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close()!!}
 </div>


@endsection