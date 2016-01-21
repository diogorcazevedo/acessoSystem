@extends('layouts.client.app')

@section('content')
    @if(Auth::user()->role == 'client')
        @if(Session::has('success'))
            <div style="margin-top: 5%; margin-bottom: 5%;" class="col-sm-12 padding-right">
                <div class="features_items">
                    <ul class="list-group">
                        <li class="list-group-item listback text-center">{{Session::get('success')}}</li>
                    </ul>
                </div>
            </div>
            {{Session::forget('success')}}
        @endif
        <div style="margin-top: 15%; margin-bottom: 5%;" class="container col-lg-12">
            <div class="content well well-sm col-lg-6">
                <p class="well well-sm text-center">Correção de Lotes Regulares</p>
                <ul class="list-group">
                    <li class="list-group-item listback">Acessar:
                        <a href="{{ route('home') }}" class="btn btn-xs btn-default">Esteira de correção</a>
                    </li>
                </ul>
            </div>
            <div class="content well well-sm col-lg-6">
                <p class="well well-sm text-center">Correção de Lotes Recurso</p>
                <ul class="list-group">
                    <li class="list-group-item listback">Acessar:
                        <a href="{{ route('home') }}" class="btn btn-xs btn-default">Esteira de correção</a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
@endsection