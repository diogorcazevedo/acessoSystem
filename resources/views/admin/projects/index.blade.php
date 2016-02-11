@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h4 class="text-center">Editais</h4>
        <hr class="hrstyle">
        <br/>
        <a href='{{route('admin.projects.create')}}' class="btn btn-primary">Novo Edital</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Edital</th>
                <th>projeto</th>
                <th>Escolaridade</th>
                <th>Taxa</th>
                <th>Ações</th>

            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->protocol->name}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->schooling}}</td>
                <td>{{$project->tax}}</td>
                <td>
                    <a href="{{route('admin.projects.edit',['id'=>$project->id])}}" class="btn btn-orange">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $projects->render() !!}

    </div>


@endsection