@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h3 class="text-center">Editar Editais: {{$project->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($project,['route'=>['admin.projects.update',$project->id]]) !!}

        @include('admin.projects.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close()!!}
 </div>


@endsection