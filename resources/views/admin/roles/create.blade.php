@extends('layouts.admin.app')

@section('content')
            <hr class="hrstyle">
            <h4 class="text-uppercase">Cadastro de Permissões</h4>
            <hr class="hrstyle">

            <br/>
            @include('errors._check')

            {!! Form::open(['route'=>'admin.roles.store']) !!}

            @include('admin.roles.partial._form')

            <div class="form-group">

                {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close()!!}

@endsection