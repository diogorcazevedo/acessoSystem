@extends('layouts.admin.app')

@section('content')
        <hr>
        <h4 class="text-uppercase btn btn-danger">Bradesco Controlle</h4>
        <hr>
        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>agência</th>
                <th>conta</th>
                <th>valor</th>
                <th>ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bankings as $banking)
            <tr>
                <td>{{$banking->id}}</td>
                <td>{{$banking->agencia}}  - {{$banking->agenciaDv}}</td>
                <td>{{$banking->conta}} - {{$banking->contaDv}}</td>
                <td>{{$banking->valor}}</td>
                <td>
                    <a href="{{route('admin.bradesco.edit',['id'=>$banking->id])}}" class="btn gray">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $bankings->render() !!}
@endsection