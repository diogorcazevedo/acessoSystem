@extends('layouts.admin.app')
@section('content')
        @include('layouts.admin.breadcrump.list',['project'=>$project])

        <table class="table table-bordered">

            {!! Form::open(['route'=>['admin.entries.index',$project->id],'method'=>'GET']) !!}
                @include('admin.search._partial')
            {!! Form::close()!!}

            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Def</th>
                <th>Cota</th>
                <th>Necessidades</th>
                <th class="col-sm-3">Edição</th>
                <th>Mudar Cargo</th>

            </tr>
            </thead>
            <tbody>


            @foreach($entries as $entry)


                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->user->name}}</td>
                    <td>{{$entry->user->email}}</td>
                    <td>{{$entry->user_handicapped}}</td>
                    <td>{{$entry->user_quota}}</td>
                    <td>
                        Declarou necessidade: {{$entry->user_needs}}<br/><br/>
                        Informada: {{$entry->user_needs_name}}
                    </td>
                    <td class="col-sm-3">
                        <a href="{{route('admin.entries.edit',[$entry->user->client->id,$entry->project_id ])}}" class="btn-sm btn gray">
                            Inscrição</br></br>
                        </a>
                        <a href="{{route('admin.users.edit',['id'=>$entry->user->client->id])}}" class="btn-sm btn gray">
                            Dados </br>Pessoais
                        </a>
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-history"></i> {{$protocol->name}}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach($protocol->projects as $item)
                                <li><a href="{{route('admin.entries.change',[$entry->id,$item->id])}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $entries->render() !!}

@endsection
