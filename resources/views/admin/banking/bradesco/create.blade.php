@extends('layouts.admin.app')

@section('content')
        <hr>
        <h3 class="text-uppercase">Novo Boleto Bradesco</h3>
        <hr>

        @include('errors._check')

    {!! Form::open(['route'=>'admin.bradesco.store']) !!}

        @include('admin.banking.bradesco.partial._form')

        <div class="form-group">

            {!! Form::submit('Criar',['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::hidden('project_id', $id) !!}
    {!! Form::close()!!}
@endsection