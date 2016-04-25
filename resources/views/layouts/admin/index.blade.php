@extends('layouts.admin.app')


@section('content')
    @include('layouts.site_structure.msg.alerts')
    <hr class="hrstyle">
    <h4>PROJETOS</h4>
    <hr class="hrstyle">
    <br/>
    @if(Auth::user()->role == 'admin')
        @foreach($protocols as $protocol)
            <div class="col-lg-4 col-md-5">
                <div class="panel  gray">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-10 title">
                               <small>{{$protocol->name}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="title">
                                <a style="height: 30px;" class="btn-default btn-group btn-group-justified text-center" href="#project{{$protocol->id}}" data-toggle="collapse" data-parent="#MainMenu">
                                    <i class="fa fa-folder-open"></i>
                                    Concorrências
                                    <i class="fa fa-arrow-circle-down"></i>
                                </a>
                                <ul class="collapse nav" id="project{{$protocol->id}}">
                                    @foreach($protocol->projects as $project)

                                        <button type="button" class="btn-default btn-group btn-group-justified" data-toggle="modal" data-target="#myModal{{$project->id}}">
                                            {{$project->name}}
                                        </button>

                                        <!-- Modal -->
                                        @include('layouts.admin.modal.select_function',['project'=>$project])

                                    @endforeach

                                </ul>
                            </div>
                            <div class="pull-right">
                                @foreach($protocol->files as $file)
                                    @if($file->type == 1)
                                        <img class="img-responsive" src="{{url('uploads/protocols/'.$file->id.'.'.$file->extension)}}" width="60"/>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection


@section('footer')
    @include('layouts.admin.footer.nav_footer_logo')
@endsection