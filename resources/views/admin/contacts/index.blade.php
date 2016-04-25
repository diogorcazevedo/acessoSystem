@extends('layouts.admin.app')
@section('content')
        <hr>
        <h4 class="text-uppercase">Contatos dos Candidatos</h4>
        <hr >
        <br/>

        <table class="table table-bordered">

            {!! Form::open(['route'=>'admin.contacts.index','method'=>'GET']) !!}

            @include('admin.search._partial')


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
@endsection