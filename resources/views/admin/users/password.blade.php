@extends('layouts.admin.app')

@section('content')
    <div style="margin-bottom: 5%;" class="col-lg-offset-2 col-sm-8 padding-right">
        <h3>Editar Cliente: {{$user->name}}</h3>

        @include('errors._check')


    {!! Form::model($user,['route'=>['admin.users.updatepassword',$user->id]]) !!}

        @include('admin.users.partial._form_password')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
            <a href="{{route('admin.users.index')}}" class="btn btn-orange">Cancelar</a>
        </div>


    {!! Form::close()!!}
 </div>


@endsection