@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h4 class="text-center">Administrações e Orgãos</h4>
        <hr class="hrstyle">
        <br/>
        <a href="{{route('admin.sponsors.create')}}"class="btn btn-primary">Nova Administração</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sponsors as $sponsor)
            <tr>
                <td>{{$sponsor->id}}</td>
                <td>{{$sponsor->name}}</td>
                <td>
                    <a href="{{route('admin.sponsors.edit',['id'=>$sponsor->id])}}" class="btn btn-orange">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $sponsors->render() !!}

    </div>


@endsection