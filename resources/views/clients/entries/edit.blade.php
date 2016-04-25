@extends('app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
                <p>Você já possui inscrição para o cargo: <b>{{$project->name}}</b></p>
                <p>O formulário abaixo mostra suas escolhas na inscrição anterior</p>
                <p>Se desejar modificar basta alterar o formulário e salvar</p>
                <p>Qualquer alteração é responsabilidade (exclusiva) do candidato</p>

            </div>
            <div class="panel-body">
                {!! Form::model($entry,['route'=>['entries.update',$entry->id],'class'=>'form-horizontal', 'role'=>"form"]) !!}

                @include('clients.entries.partial._form')

                <div class="form-group">
                    <div class="col-md-1 col-md-offset-4">
                        {!! Form::submit('Salvar',['class'=>'btn btn-orange btn-lg']) !!}
                    </div>
                    <div class=" col-md-offset-1 col-md-5">
                        <a href="{{route('layout.client')}}" class="btn btn-primary">
                            Desistir das alterações <br/> e manter inscrição anterior
                        </a>
                    </div>
                </div>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection