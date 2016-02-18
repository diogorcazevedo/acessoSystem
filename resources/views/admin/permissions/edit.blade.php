@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="col-lg-offset-1 col-lg-10 padding-right">
        <h3>Editar Documento: {{$permission->name}}</h3>

        @include('errors._check')


    {!! Form::model($permission,['route'=>['admin.permissions.update',$permission->id]]) !!}

        @include('admin.permissions.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close()!!}
 </div>


@endsection