@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors._check')
        <div class="panel panel-default" style="padding: 5%;">
            <div class="wellwhite">
                <div class="wellwhite">
                    @if(Session::has('success'))
                        <div class="col-sm-12">
                            <div class="features_items">
                                <ul class="list-group">
                                    <li class="list-group-item listback text-center">{{Session::get('success')}}</li>
                                </ul>
                            </div>
                        </div>
                        {{Session::forget('success')}}
                    @endif
                    <h3 class="text-center">Fale conosco</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['contacts.store'],'method'=>'post','enctype'=>'multipart/form-data']) !!}

                    @include('admin.contacts.partial._form')

                    <div class="form-group col-lg-offset-2 col-lg-8">
                        {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection