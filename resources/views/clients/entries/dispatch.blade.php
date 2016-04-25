@extends('layouts.client.app')
@section('content')
    <hr class="hrstyle">
    <h4 class="text-uppercase"><small>Inscrições para o Candidato:</small> {{$entry->user->name}}</h4>
    <hr class="hrstyle">
    <br/>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Concorrência</th>
            <th>Boleto</th>
            <th>Isenção</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$entry->id}}</td>
            <td>{{$entry->project->name}}</td>
            <td>
                <a href="{{route('admin.users.role',['id'=>$entry->id])}}" class="btn-sm btn btn-primary">
                    Imprimir Boleto
                </a>

                <a href="{{route('admin.users.password',['id'=>$entry->id])}}" class="btn-sm btn btn-primary">
                    2ª via do Boleto
                </a>
            </td>
            <td>
                <a href="{{route('admin.users.edit',['id'=>$entry->id])}}" class="btn-sm btn btn-orange">
                    Solicitar isenção da Taxa de Inscrição
                </a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection