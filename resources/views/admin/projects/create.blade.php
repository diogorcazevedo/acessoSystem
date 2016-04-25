@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase">Configurar Inscrição</h4>
        <hr>

        @include('errors._check')

    {!! Form::open(['route'=>'admin.projects.store']) !!}

        @include('admin.projects.partial._form')

        <div class="form-group">

            {!! Form::submit('Criar',['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::hidden('protocol_id', $id) !!}
    {!! Form::close()!!}
@endsection