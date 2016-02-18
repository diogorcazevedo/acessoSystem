@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-lg-offset-2 col-sm-8">
            <h4>Cadastro de Permission</h4>
            <br/>
            @include('errors._check')

            {!! Form::open(['route'=>'admin.permissions.store']) !!}

            @include('admin.permissions.partial._form')

            <div class="form-group">

                {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close()!!}
        </div>

    </div>
@endsection