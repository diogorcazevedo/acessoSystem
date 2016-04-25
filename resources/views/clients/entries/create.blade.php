@extends('app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Inscrição do Concurso: <b>{{$project->name}}</b></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('entries.store')}}">
                    {!! csrf_field() !!}

                    @include('clients.entries.partial._form')

                    {!! Form::hidden('project_id', $project->id) !!}
                    {!! Form::hidden('user_id', auth()->user()->id) !!}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-5">
                            <button type="submit" class="btn btn-orange">
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection