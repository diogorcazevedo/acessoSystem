@extends('layouts.admin.app')


@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h4 class="text-center">Documentos: {{$deliverable->name}}</h4>
        <hr class="hrstyle">
        <br/>
        <a href="{{route('admin.deliverablefiles.create',['id'=>$deliverable->id])}}" class="btn btn-primary">Novo Documento</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Publicação</th>
                <th>Publicado</th>
                <th>Nome</th>
                <th>Extension</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($deliverable->files as $file)
            <tr>
                <td>{{$file->id}}</td>
                <td><img src="{{url('uploads/deliverables/'.$file->id.'.'.$file->extension)}}"/> </td>
                <td>{{$file->name}}</td>
                <td>{{ $file->publishable == 1 ? 'sim' : 'não' }}</td>
                <td>{{$file->file}}</td>
                <td>{{$file->extension}}</td>
                <td>
                    <a href="{{route('admin.deliverablefiles.destroy',['id'=>$file->id])}}" class="btn-sm btn btn-orange">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
<a href="{{route('admin.deliverables.index')}}" class="btn btn-primary">Voltar para Etapas</a>
    </div>


@endsection