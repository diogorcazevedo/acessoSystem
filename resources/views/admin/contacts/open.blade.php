@extends('layouts.admin.app')
@section('content')
        <hr>
        <h4 class="text-uppercase">Contatos dos candidatos - Qtd de contatos:: {{$count}}</h4>
        <hr>
        <br/>

        <table class="table table-bordered">

            {!! Form::open(['route'=>'admin.contacts.open','method'=>'GET']) !!}

            <div class="pull-right form-inline">

                <div class="form-group">
                    {!! Form::label('Pesquisar','Pesquisar:') !!}
                    {!! Form::text('search',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Pesquisar',['class'=>'btn btn-warning']) !!}
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>


            {!! Form::close()!!}

            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Contatos</th>
                <th>Descrição</th>
                <th>Arquivo</th>
                <th>Responder</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td><b>Email:</b><br/> {{$contact->email}}<hr/> <br/><b>Celular:</b><br/> {{$contact->cel}}</td>
                    <td class="col-lg-4"><b>Sobre:</b><br/> {{$contact->about}}<hr/><br/><b>Motivo:<br/></b> {{$contact->description}}</td>
                    <td>
                        @if(file_exists(public_path('uploads/contacts/'.$contact->id.'.'.$contact->extension)))
                            <a class="btn btn-orange btn-sm" href="{{url('uploads/contacts/'.$contact->id.'.'.$contact->extension)}}" download>Download</a>
                         @endif
                    </td>
                    <td class="col-lg-4">
                        {!! Form::model($contact,['route'=>['admin.contacts.update',$contact->id],'id'=>"formq{$contact->id}"]) !!}
                        @include('admin.contacts.partial._form_table')
                        {!! Form::hidden('id', $contact->id) !!}
                        <?php $inpt = $contact->id ?>
                        <div class="form-group">
                            <input type="button" onclick="addFunction(<?php echo $inpt ?>);" value="responder" class="btn btn-warning">
                        </div>
                        {!! Form::close()!!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $contacts->render() !!}


    <script type="text/javascript">
        function addFunction(id) {
            document.getElementById('formq'+id).submit();
        }
    </script>

@endsection