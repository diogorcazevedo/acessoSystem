@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase">Administrações e Orgãos</h4>
        <hr>
        <br/>
        <a href="{{route('bancas')}}"class="btn gray">Nova Administração</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ação</th>
                <th>Próximo Passo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sponsors as $sponsor)
            <tr>
                <td>{{$sponsor->id}}</td>
                <td>{{$sponsor->name}}</td>
                <td>
                    <a href="{{route('bancas',['id'=>$sponsor->id])}}" class="btn gray">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="{{route('admin.protocols.create',['id'=>$sponsor->id])}}" class="btn btn-warning">
                        Criar Edital
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $sponsors->render() !!}
@endsection