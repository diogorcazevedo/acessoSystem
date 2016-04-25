@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Editar Editais: {{$project->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($project,['route'=>['admin.projects.update',$project->id]]) !!}

        <div class="form-group">
            {!! Form::label('Edital de Concurso','Edital de Concurso:') !!}
            {!! Form::select('protocol_id',$protocols, null, ['class'=>'form-control' ,'placeholder' => 'Selecionar Administração'])!!}

        </div>

        @include('admin.projects.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
        </div>
    {!! Form::close()!!}
@endsection