@extends('layouts.client.app')

@section('content')
    @include('layouts.site_structure.msg.alerts')
    <hr class="hrstyle">
    <br/>
    <div class="col-lg-2">
        <p class="alert gray text-center">INSCRIÇÕES PARA O CANDIDATO</p>
    </div>
    <div class="col-lg-10">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Concorrência</th>
                <th>Boleto</th>
                <th>Isenção</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{$entry->id}}</td>
                    <td>{{$entry->user->name}}</td>
                    <td>{{$entry->project->name}}</td>
                    <td>

                        <?php
                        switch ($entry->project->banking->bank) {
                            case 1:
                                ?>
                                <a href="{{route('bradesco.toview',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Imprimir Boleto
                                </a>
                                <a href="{{route('bradesco.toprint',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Visualizar Boleto
                                </a>
                                <?php
                                break;
                            case 2:
                            ?>
                            <a href="{{route('bradesco.toview',[$entry->id])}}" class="btn-sm btn btn-warning">
                                Imprimir Boleto
                            </a>
                            <a href="{{route('bradesco.toprint',[$entry->id])}}" class="btn-sm btn btn-warning">
                                Visualizar Boleto
                            </a>
                            <?php
                                break;
                            case 3:
                            ?>
                            <a href="{{route('bradesco.toview',[$entry->id])}}" class="btn-sm btn btn-warning">
                                Imprimir Boleto
                            </a>
                            <a href="{{route('bradesco.toprint',[$entry->id])}}" class="btn-sm btn btn-warning">
                                Visualizar Boleto
                            </a>
                            <?php
                                break;
                            case 4:
                                ?>
                                <a href="{{route('bradesco.toview',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Imprimir Boleto
                                </a>
                                <a href="{{route('bradesco.toprint',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Visualizar Boleto
                                </a>
                                <?php
                                break;
                            case 5:
                                ?>
                                <a href="{{route('bradesco.toview',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Imprimir Boleto
                                </a>
                                <a href="{{route('bradesco.toprint',[$entry->id])}}" class="btn-sm btn btn-warning">
                                    Visualizar Boleto
                                </a>
                                <?php
                                break;
                        }
                        ?>
                    </td>
                    <td>
                        <div class="col-lg-6">
                            <a href="{{route('frees.create',[$entry->user->id,$entry->id])}}" class="btn-sm btn gray">
                                Solicitar isenção <br/> Taxa de Inscrição
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{route('frees.edit',['id'=>$entry->user->id])}}" class="btn-sm btn gray">
                                Recurso isenção <br/>  Taxa de Inscrição
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br/><br/><br/>
    </div>

    <hr class="hrstyle" style="clear: both;">
    <div class="col-lg-2">
        <p class="alert gray text-center">CONCURSOS ABERTOS</p>
    </div>
    <div class="wellwhite well-sm col-lg-10">
        @forelse($protocols as $protocol)
            <div class="well well-sm col-lg-6">
                <div class="wellwhite well-sm col-lg-12">
                    <div class="col-lg-3">
                        @foreach($protocol->files as $file)
                            @if($file->type == 1)
                                <img src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}"/>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-9">
                        <h4 class="well">
                            {{$protocol->name}}<br/>
                            <small>{{$protocol->description}}</small>
                        </h4>
                        @foreach($protocol->projects as $projects)
                            <p class="wellwhite">
                                {{$projects->name}}<br/>
                                <small>{{$projects->description}}</small>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
        @empty
            <h4 class="wellwhite">Sem inscrições abertas no momento</h4>
        @endforelse
    </div>
@endsection