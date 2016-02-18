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
        <h4 class="text-center">Administradores do Sistema</h4>
        <hr class="hrstyle">
        <br/>
        <a href=" {{route('home')}}" class="btn btn-primary ">Voltar</a>
        <br/>
        <br/>
        <div class="row">
            <table class="table table-bordered">
                {!! Form::open(['route'=>'admin.managers.index','method'=>'GET']) !!}

                <div class="pull-right form-inline">

                    <div class="form-group">
                        {!! Form::label('Pesquisar','Pesquisar:') !!}
                        {!! Form::text('search',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Buscar',['class'=>'btn btn-warning']) !!}
                    </div>
                    <br/>
                    <br/>
                </div>


                {!! Form::close()!!}
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @foreach($user->roles as $role)
                        <td>{{ $role->name or "Usuário sem biografia" }}</td>
                        @endforeach
                        <td>
                            <a href="{{route('admin.users.edit',['id'=>$user->id])}}" class="btn-sm btn btn-primary">
                                Editar
                            </a>
                            <a href="{{route('admin.managers.roles',['id'=>$user->id])}}" class="btn-sm btn btn-orange">
                                Permissões
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
