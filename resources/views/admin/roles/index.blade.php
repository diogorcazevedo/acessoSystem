@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Administrar Níveis do Sistema</h4>
        <hr class="hrstyle">
        <br/>
        <a href=" {{route('admin.roles.create')}}" class="btn btn-orange ">Criar novo nível</a>
        <br/>
        <br/>
            <table class="table table-bordered">
                <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>
                            <a href="{{route('admin.roles.edit',['id'=>$role->id])}}" class="btn-sm btn btn-primary">
                                Editar
                            </a>
                            <a href="{{route('admin.roles.permissions',['id'=>$role->id])}}" class="btn-sm btn btn-primary">
                                Permissões para o nível
                            </a>
                            <a href="{{route('admin.roles.destroy',['id'=>$role->id])}}" class="btn-sm btn btn-red">
                                Destruir
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <a href=" {{route('home')}}" class="btn btn-primary">Voltar</a>
@endsection
