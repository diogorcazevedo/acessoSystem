@extends('layouts.admin.app')


@section('content')
        <hr>
        <h4 class="text-uppercase">Imagens {{$protocol->name}}</h4>
        <hr>
        <br/>
        <a href="{{route('admin.protocolsfile.create',['id'=>$protocol->id])}}" class="btn gray">Nova Imagem</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Documento</th>
                <th>Extension</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($protocol->files as $file)
            <tr>
                <td>{{$file->id}}</td>
                <td><img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/> </td>
                <td>{{$file->type}}</td>
                <td>{{$file->extension}}</td>
                <td>
                    <a href="{{route('admin.protocolsfile.destroy',['id'=>$file->id])}}" class="btn-sm btn btn-orange">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('admin.protocols.index')}}" class="btn gray">Voltar para Editais</a>

@endsection