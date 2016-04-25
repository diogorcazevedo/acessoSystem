@extends('layouts.admin.app')

@section('content')
        <hr class="hrstyle">
        <h4 class="text-uppercase">Permissões:: {{$role->name}}</h4>
        <hr class="hrstyle">
        <br/>

        @include('errors._check')

        {!! Form::open(['route'=>['admin.roles.permissions.store',$role->id]]) !!}

        <div class="form-inline">
        <div class="form-group col-lg-4">
            {!! Form::label('Permissões','Permissões:') !!}
            {!! Form::select('permission_id',$permissions,null,['class'=>'form-control','placeholder' => 'Selecionar Permissões'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Gravar',['class'=>'btn btn-warning']) !!}
        </div>
        </div>
        {!! Form::close()!!}

        <br/>
        <br/>
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
                @foreach($role->permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>
                        <td>
                            <a href="{{route('admin.roles.permissions.revoke',['id'=>$role->id,'permission_id'=>$permission->id])}}" class="btn-sm btn btn-red">
                                Revogar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route('admin.roles.index')}}" class="btn-sm btn btn-primary">
                Voltar
            </a>
        </div>
@endsection
