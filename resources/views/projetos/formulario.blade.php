@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Dados do projeto
                        <a class="pull-right" href="{{url('projetos')}}">listagem de projetos</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('messagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('messagem_sucesso')}}</div>
                        @endif

                        {!!Form::open(['url'=>'projetos/salvar'])!!}

                        {!! Form::label ('name','Nome do Projeto')!!}
                        {!! Form::input('text', 'name', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Projeto'])!!}

                        {!! Form::label ('autor','Autor')!!}
                        {!! Form::input('text', 'autor', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Autor'])!!}

                        {!! Form::label ('descricao','Descricao')!!}
                        {!! Form::input('text', 'descricao', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descrição'])!!}

                        {!! Form::label ('arquivo','Arquivo')!!}
                        {!! Form::input('text', 'arquivo', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Arquivo'])!!}

                        {!! Form::label ('userId','userId')!!}
                        {!! Form::input('number', 'userId', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'userId'])!!}

                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection