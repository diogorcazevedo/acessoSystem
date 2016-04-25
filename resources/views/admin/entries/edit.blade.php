@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <p class="text-uppercase">Editar Usuário: <span class="btn btn-default"><b> {{$entry->user->name}}</b></span> </p>
        <hr class="hrstyle">
        <div class="panel panel-default">
            <div class="panel-body">
                @include('errors._check')
                {!! Form::model($entry,['route'=>['admin.entries.update',$entry->id],'class'=>'form-horizontal', 'role'=>"form"]) !!}

                @include('admin.entries.partial._form')

                <div class="form-group">
                    <div class="col-md-1 col-md-offset-4">
                    {!! Form::submit('Salvar',['class'=>'btn btn-orange-destack']) !!}
                    </div>
                </div>

                {!! Form::close()!!}
            </div>
        </div>
@endsection