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
        <h4 class="text-center">Permissões do Sistema</h4>
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
        <a href=" {{route('home')}}" class="btn btn-primary ">Voltar</a>
    </div>
@endsection
