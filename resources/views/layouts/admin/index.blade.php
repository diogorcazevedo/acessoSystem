@extends('layouts.admin.app')

@section('content')
    @if(Auth::user()->role == 'admin')
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
        <div style="margin-top: 15%; margin-bottom: 5%;" class="container">
            <div class="content well well-sm">
                <p class="well well-sm text-center">Área do Administrador:
            </div>
        </div>
    @endif
@endsection