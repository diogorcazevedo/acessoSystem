@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h4 class="text-center">Editais</h4>
        <hr class="hrstyle">
        <br/>
        <a href='{{route('admin.protocols.create')}}' class="btn btn-primary">Novo Edital</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Adminsitração</th>
                <th>Edital</th>
                <th>Progresso</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>
            </thead>
            <tbody>
            @foreach($protocols as $protocol)
            <tr>
                <td>{{$protocol->id}}</td>
                <td>{{$protocol->sponsor->name}}</td>
                <td>{{$protocol->name}}</td>
                <td>{{$protocol->progress}}</td>
                <td>{{$protocol->status}}</td>
                <td>
                    <a href="{{route('admin.protocols.edit',['id'=>$protocol->id])}}" class="btn btn-orange">
                        Editar
                    </a>
                    <a href="{{route('admin.protocolsfile.index',['id'=>$protocol->id])}}" class="btn btn-primary">
                        Images
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $protocols->render() !!}

    </div>


@endsection