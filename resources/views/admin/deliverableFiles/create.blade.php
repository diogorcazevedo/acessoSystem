@extends('layouts.admin.app')


@section('content')
    <hr class="hrstyle">
    <h4 class="text-uppercase">Upload Arquivos</h4>
    <hr class="hrstyle">


        @include('errors._check')

    {!! Form::open(['route'=>['admin.deliverablefiles.store',$deliverable->id],'method'=>'post','enctype'=>'multipart/form-data']) !!}

        @include('admin.deliverableFiles.partial._formUpload')

        <div class="form-group">

            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>


    {!! Form::close()!!}


@endsection