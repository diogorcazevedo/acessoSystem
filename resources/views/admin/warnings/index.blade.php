@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <hr class="hrstyle">
        <h4 class="text-center">Avisos</h4>
        <hr class="hrstyle">
        <br/>
        <a href='{{route('admin.warnings.create')}}' class="btn btn-primary">Novo Aviso</a>
        <br/>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Edital</th>
                <th>Aviso</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>
            </thead>
            <tbody>
            @foreach($warnings as $warning)
            <tr>
                <td>{{$warning->id}}</td>
                <td>{{$warning->protocol->name}}</td>
                <td>{{$warning->name}}</td>
                <td>{{$warning->status}}</td>
                <td>
                    <a href="{{route('admin.warnings.edit',['id'=>$warning->id])}}" class="btn btn-orange">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $warnings->render() !!}

    </div>


@endsection