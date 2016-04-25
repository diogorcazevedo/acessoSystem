@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h3 class="text-uppercase">Editar Editais: {{$protocol->name}}</h3>
        <hr class="hrstyle">

        @include('errors._check')


    {!! Form::model($protocol,['route'=>['admin.protocols.update',$protocol->id]]) !!}

        <div class="form-group">
            {!! Form::label('Administração','Administração:') !!}
            {!! Form::select('sponsor_id',$sponsors, null, ['class'=>'form-control' ,'placeholder' => 'Selecionar Administração'])!!}

        </div>

        @include('admin.protocols.partial._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
        </div>
    {!! Form::close()!!}
@endsection