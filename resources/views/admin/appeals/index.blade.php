@extends('layouts.admin.app')
    @section('content')
            <hr class="hrstyle">
            <h4 class="text-uppercase">Listagem Geral de Recursos</h4>
            <hr class="hrstyle">
            <br/>

            <table class="table table-bordered">

                {!! Form::open(['route'=>['admin.appeals.index',$project],'method'=>'GET']) !!}

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
                        {!! Form::submit('Pesquisar',['class'=>'btn btn-warning']) !!}
                    </div>
                    <br/>
                    <br/>
                </div>


                {!! Form::close()!!}

                <thead>
                <tr>
                    <th>Edital</th>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Motivo</th>
                    <th>Arquivo</th>
                    <th>Respostas</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appeals as $appeal)
                    <tr>
                        <td>{{$appeal->project->name}}</td>
                        <td>{{$appeal->user->name}}</td>
                        <td>{{$appeal->user->email}}</td>
                        <td>{{$appeal->user->client->cel}}</td>
                        <td>{{$appeal->description}}</td>
                        <td>
                            @if(file_exists(public_path('uploads/appeals/'.$appeal->id.'.'.$appeal->extension)))
                                <a class="btn btn-orange btn-sm" href="{{url('uploads/appeals/'.$appeal->id.'.'.$appeal->extension)}}" download>Download</a>
                            @endif
                        </td>
                        <td>{{$appeal->return}}</td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $appeals->render() !!}
    @endsection