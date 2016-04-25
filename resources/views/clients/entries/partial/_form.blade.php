@if($project->handicapped != 0)
    <div class="form-group{{ $errors->has('user_handicapped') ? ' has-error' : '' }}">
        <label class="col-md-5 control-label">Concorrer as Vagas destinadas às Pessoas com
            Deficiência</label>

        <div class="col-md-6">
            <label class="radio-inline">{{ Form::radio('user_handicapped', '0') }}Não</label>
            <label class="radio-inline">{{ Form::radio('user_handicapped', '1') }}Sim</label>

            @if ($errors->has('user_handicapped'))
                <span class="help-block">
                  <strong>{{ $errors->first('user_handicapped') }}</strong>
                </span>
            @endif
        </div>
    </div>
@endif

@if($project->quota != 0)
    <div class="form-group{{ $errors->has('user_quota') ? ' has-error' : '' }}">
        <label class="col-md-5 control-label">Concorrer as Vagas destinadas ao sistema de
            cotas</label>

        <div class="col-md-6">
            <label class="radio-inline">{{ Form::radio('user_quota', '0') }}Não</label>
            <label class="radio-inline">{{ Form::radio('user_quota', '1') }}Sim</label>

            @if ($errors->has('user_quota'))
                <span class="help-block">
                  <strong>{{ $errors->first('user_quota') }}</strong>
                </span>
            @endif
        </div>
    </div>
    @endif


    @if($project->needs != 0)
            <!--  -->
    <hr class="hrstyle">
    <h5 class="text-center">Necessidades para o dia da prova</h5>
    <hr class="hrstyle">
    <!--  -->
    <div class="form-group{{ $errors->has('user_needs') ? ' has-error' : '' }}">
        <label class="col-md-5 control-label">Desejo solicitar atendimento especial a minha
            necessidade</label>

        <div class="col-md-6">
            <label class="radio-inline">{{ Form::radio('user_needs', '0') }}Não</label>
            <label class="radio-inline">{{ Form::radio('user_needs', '1') }}Sim</label>

            @if ($errors->has('user_needs'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_needs') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('user_needs_name') ? ' has-error' : '' }}">
        <label class="col-md-5 control-label">Opções para necessidades especiais</label>
        <div class="col-md-6">
            {{ Form::select('user_needs_name', arraynecessidades(), null, array('class' => 'form-control','value'=> old('user_needs_name'), 'placeholder'=>"Selecionar")) }}

            @if ($errors->has('user_needs_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_needs_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <hr class="hrstyle">
@endif