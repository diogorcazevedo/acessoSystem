@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase">Editais</h4>
        <hr>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adminsitração</th>
                <th>Edital</th>
                <th>Número do Edital</th>
                <th>Status</th>
                <th>Ações</th>
                <th>Terceiro Passo</th>

            </tr>
            </thead>
            <tbody>
            @foreach($protocols as $protocol)
            <tr>
                <td>{{$protocol->id}}</td>
                <td>{{$protocol->sponsor->name}}</td>
                <td>{{$protocol->name}}</td>
                <td>{{$protocol->protocol_number}}</td>
                <td>{{$protocol->status}}</td>
                <td>
                    <a href="{{route('admin.protocols.edit',['id'=>$protocol->id])}}" class="btn gray">
                        Editar
                    </a>
                    <a href="{{route('admin.protocolsfile.index',['id'=>$protocol->id])}}" class="btn gray">
                        Images
                    </a>
                </td>
                <td>
                    <a href="{{route('admin.projects.create',['id'=>$protocol->id])}}" class="btn btn-warning">
                        Criar Inscrição
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $protocols->render() !!}
@endsection