@extends('layouts.admin.app')
@section('content')
    @include('layouts.admin.breadcrump.list',['project'=>$project])
    <table class="table table-bordered">
        {!! Form::open(['route'=>['admin.frees.index',$project->id],'method'=>'GET']) !!}
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

        @foreach($frees as $free)
                <tr>
                    <td>{{$free->id}}</td>
                    <td>{{$free->name}}</td>
                    <td>{{$free->email}}</td>
                    <td>
                        <a href="{{route('admin.frees.edit',[$free->user_id])}}" class="btn-sm btn gray">
                            Editar
                        </a>

                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>

    {!! $frees->render() !!}

    <span class="wellwhite well-sm pull-right">
            <a href="{{route('admin.frees.export',['id'=>$frees['0']['project_id']])}}" class="btn btn-success">
                Exportar
            </a>
    </span>

@endsection