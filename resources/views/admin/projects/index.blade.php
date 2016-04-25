@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase">Inscrições - Concorrência (cargos/vagas)</h4>
        <hr>
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
                <th>Cadastrar</th>

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
                    <a href="{{route('admin.projects.edit',['id'=>$project->id])}}" class="btn gray">
                        Editar
                    </a>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-history"></i> Boleto
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admin.bradesco.create',['id'=>$project->id])}}" class="btn btn-default">Bradesco</a></li>
                            <li><a href="{{route('admin.bradesco.create',['id'=>$project->id])}}" class="btn btn-default">Itaú</a></li>
                            <li><a href="{{route('admin.bradesco.create',['id'=>$project->id])}}" class="btn btn-default">Santander</a></li>
                            <li><a href="{{route('admin.bradesco.create',['id'=>$project->id])}}" class="btn btn-default">Caixa</a></li>
                            <li><a href="{{route('admin.bradesco.create',['id'=>$project->id])}}" class="btn btn-default">B.B.</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $projects->render() !!}
@endsection