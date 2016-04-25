<hr>
<div class="col-sm-6">
    <p class="text-uppercase btn btn-default"><small>Inscritos para a concorrência: <b>{{$project->name}}</b></small></p>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb pull-right">
        <li><a href="#">Candidatos</a></li>
        <li><a href="{{route('admin.entries.index',['id'=>$project->id])}}">Inscricao</a></li>
        <li><a href="{{route('admin.frees.index',['id'=>$project->id])}}">Isenção</a></li>
    </ol>
</div>
<hr style="clear: both;">
<br/>
<br/>