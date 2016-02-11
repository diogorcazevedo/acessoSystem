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
        <h4 class="text-center">Contatos dos Candidatos</h4>
        <hr class="hrstyle">
        <br/>
        <a href=" {{route('admin.layout.admin')}}" class="btn btn-primary ">Voltar</a>
        <br/>
        <br/>

        <table class="table table-bordered">

            {!! Form::open(['route'=>['admin.appeals.open',$project],'method'=>'GET']) !!}

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
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Descrição</th>
                <th>Arquivo</th>
                <th>Responder</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appeals as $appeal)
                <tr>
                    <td>{{$appeal->user->name}}</td>
                    <td>{{$appeal->user->email}}</td>
                    <td>{{$appeal->user->client->cel}}</td>
                    <td>{{$appeal->description}}</td>
                    <td>
                        @if(file_exists(public_path('uploads/appeals/'.$appeal->id.'.'.$appeal->extension)))
                            <a class="btn btn-orange btn-sm" href="{{url('uploads/appeals/'.$appeal->id.'.'.$appeal->extension)}}" download>Download</a>
                         @endif
                    </td>
                    <td>
                        {!! Form::model($appeal,['route'=>['admin.appeals.update',$appeal->id],'id'=>"formq{$appeal->id}"]) !!}
                        @include('admin.appeals.partial._form_table')
                        {!! Form::hidden('id', $appeal->id) !!}
                        <?php $inpt = $appeal->id ?>
                        <div class="form-group">
                            <input type="button" onclick="addFunction(<?php echo $inpt ?>);" value="responder" class="btn btn-primary">
                        </div>
                        {!! Form::close()!!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $appeals->render() !!}

    </div>

    <script type="text/javascript">
        function addFunction(id) {
            document.getElementById('formq'+id).submit();
        }
    </script>

@endsection