@extends('layouts.admin.app')
@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Usuários do Sistema ( Candidatos e Administradores )</h4>
        <hr class="hrstyle">
        <br/>

        <table class="table table-bordered">

            {!! Form::open(['route'=>'admin.users.index','method'=>'GET']) !!}

              @include('admin.search._partial')

            {!! Form::close()!!}

            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Edição</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('admin.users.role',['id'=>$user->id])}}" class="btn-sm btn btn-primary">
                            Função
                        </a>

                        <a href="{{route('admin.users.password',['id'=>$user->id])}}" class="btn-sm btn btn-primary">
                            Senha
                        </a>

                        <a href="{{route('admin.users.edit',['id'=>$user->client->id])}}" class="btn-sm btn btn-orange">
                            Dados Pessoais
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $users->render() !!}


@endsection