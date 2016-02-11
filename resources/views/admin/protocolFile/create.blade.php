@extends('layouts.admin.app')


@section('content')
    <div class="container">
        <h3>Upload Arquivos</h3>

        @include('errors._check')

        {!! Form::open(['route'=>['admin.protocolsfile.store',$protocol->id],'method'=>'post','enctype'=>'multipart/form-data']) !!}

        @include('admin.protocolFile.partial._formUpload')

        <div class="form-group">

            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close()!!}
    </div>


@endsection