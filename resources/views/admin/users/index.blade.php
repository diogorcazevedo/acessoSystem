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
        <h3>Usuários do Sistema ( Candidatos e Administradores )</h3>
        <br/>
        <a href=" {{route('home')}}" class="btn btn-primary ">Voltar</a>
        <br/>
        <br/>

        <table class="table table-bordered">

            {!! Form::open(['route'=>'admin.users.index','method'=>'GET']) !!}

            <div class="pull-right form-inline">

                <div class="form-group">
                    {!! Form::label('Name','Nome:') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email','Email:') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Pesquisar por nome',['class'=>'btn btn-warning']) !!}
                </div>
                <br/>
                <br/>
            </div>


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

    </div>


@endsection