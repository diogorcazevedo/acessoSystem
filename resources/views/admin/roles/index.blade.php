@extends('layouts.admin.app')

@section('content')
    @if(Session::has('success'))
        <div style="margin-bottom: 2%;" class="col-lg-offset-1 col-sm-10 padding-right">
            <div class="features_items">
                <ul class="list-group">
                    <li class="list-group-item listback text-center">{{Session::get('success')}}</li>
                </ul>
            </div>
        </div>
        {{Session::forget('success')}}
    @endif
    <div style="margin-bottom: 5%;" class="col-lg-offset-1 col-lg-10 padding-right">
        <hr class="hrstyle">
        <h4 class="text-center">Administrar Níveis do Sistema</h4>
        <hr class="hrstyle">
        <br/>
        <a href=" {{route('admin.roles.create')}}" class="btn btn-orange ">Criar novo nível</a>
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

        </div>
        <a href=" {{route('home')}}" class="btn btn-primary">Voltar</a>
    </div>
@endsection
