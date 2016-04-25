@extends('layouts.admin.app')


@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Upload Arquivos</h4>
        <hr class="hrstyle">

        @include('errors._check')

        {!! Form::open(['route'=>['admin.protocolsfile.store',$protocol->id],'method'=>'post','enctype'=>'multipart/form-data']) !!}

        @include('admin.protocolFile.partial._formUpload')

        <div class="form-group">

            {!! Form::submit('Salvar',['class'=>'btn btn-warning']) !!}
        </div>


        {!! Form::close()!!}

@endsection