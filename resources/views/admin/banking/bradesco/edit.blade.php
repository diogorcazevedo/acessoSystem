@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Editar Editais: {{$banking->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($banking,['route'=>['admin.bradesco.update',$banking->id]]) !!}

        <div class="form-group">
            {!! Form::label('Edital de Concurso','Edital de Concurso:') !!}
            {!! Form::select('project_id',$projects, null, ['class'=>'form-control' ,'placeholder' => 'Selecionar Administração'])!!}

        </div>

        @include('admin.banking.bradesco.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
        </div>
    {!! Form::close()!!}
@endsection