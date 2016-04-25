@extends('layouts.admin.app')
@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Permissões do Sistema</h4>
        <hr class="hrstyle">
        <br/>
        <a href=" {{route('admin.permissions.create')}}" class="btn btn-primary ">Criar nova Permissão</a>
        <br/>
        <br/>

        <div class="row">
            <table class="table table-bordered">
                <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>
                        <td>
                            <a href="{{route('admin.permissions.edit',['id'=>$permission->id])}}" class="btn-sm btn btn-primary">
                                Editar
                            </a>
                            <a href="{{route('admin.permissions.destroy',['id'=>$permission->id])}}" class="btn-sm btn btn-red">
                                Destruir
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        {!! $permissions->render() !!}
@endsection
