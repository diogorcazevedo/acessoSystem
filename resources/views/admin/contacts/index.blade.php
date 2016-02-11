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

            {!! Form::open(['route'=>'admin.contacts.index','method'=>'GET']) !!}

            <div class="pull-right form-inline">

                <div class="form-group">
                    {!! Form::label('Pesquisar','Pesquisar:') !!}
                    {!! Form::text('source',null,['class'=>'form-control']) !!}
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
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Sobre</th>
                <th>Motivo</th>
                <th>Arquivo</th>
                <th>Respostas</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->cel}}</td>
                    <td>{{$contact->about}}</td>
                    <td>{{$contact->description}}</td>
                    <td>
                        @if(file_exists(public_path('uploads/contacts/'.$contact->id.'.'.$contact->extension)))
                            <a class="btn btn-orange btn-sm" href="{{url('uploads/contacts/'.$contact->id.'.'.$contact->extension)}}" download>Download</a>
                        @endif
                    </td>
                    <td>{{$contact->return}}</td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $contacts->render() !!}

    </div>

@endsection