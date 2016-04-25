<div class="modal fade" id="myModal{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header gray">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{$project->name}}</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Inscrições</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.frees.index',['id'=>$project->id])}}">Isenções</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Pagamentos</a></p>
                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Recursos</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Alocações</a></p>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <hr style="clear: both;">
                    <br/>
                    <p class="gray btn-group btn-group-justified text-center">AVALIAÇÕES</p>
                    <br/>
                    <hr style="clear: both;">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Objetiva</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Discursiva</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">TAF</a></p>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Títulos</a></p>
                            </div>
                            <div class="col-lg-4">
                                <p><a class="lead" href="{{route('admin.entries.index',['id'=>$project->id])}}">Práticos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="clear: both;">
                <button type="button" class="btn gray" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>