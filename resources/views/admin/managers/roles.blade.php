@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Roles:: {{$user->name}}</h4>
        <hr class="hrstyle">
        <br/>

        @include('errors._check')

        {!! Form::open(['route'=>['admin.managers.roles.store',$user->id]]) !!}

        <div class="form-inline">
        <div class="form-group">
            {!! Form::label('Roles','Roles:') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control','placeholder' => 'Selecionar Nível'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Enviar',['class'=>'btn btn-warning']) !!}
        </div>
        </div>
        {!! Form::close()!!}

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
                @foreach($user->roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>

                        <td>
                            <a href="{{route('admin.managers.roles.revoke',['id'=>$user->id, 'role_id'=>$role->id])}}"
                               class="btn btn-red">
                                Revoke
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route('admin.managers.index')}}" class="btn-sm btn btn-primary">
                Voltar
            </a>
        </div>
@endsection
