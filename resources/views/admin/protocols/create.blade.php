@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase">Novo Edital</h4>
        <hr>

        @include('errors._check')

    {!! Form::open(['route'=>'admin.protocols.store']) !!}

        @include('admin.protocols.partial._form')

        <div class="form-group">
            {!! Form::submit('Criar',['class'=>'btn btn-warning']) !!}
        </div>

        {!! Form::hidden('sponsor_id', $id) !!}
    {!! Form::close()!!}

@endsection