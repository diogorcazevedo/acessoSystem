@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Editar Editais: {{$warning->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($warning,['route'=>['admin.warnings.update',$warning->id]]) !!}

        @include('admin.warnings.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close()!!}
@endsection