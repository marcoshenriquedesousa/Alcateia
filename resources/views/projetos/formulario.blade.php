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
                        {!!Form::open(['url'=>'projetos/salvar'])!!}

                        {!! Form::label ('nome','Nome do Projeto')!!}
                        {!! Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome do Projeto'])!!}

                        {!! Form::label ('autor','Autor')!!}
                        {!! Form::input('text', 'autor', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Autor'])!!}

                        {!! Form::label ('descricao','Descricao')!!}
                        {!! Form::input('text', 'descricao', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Descrição'])!!}

                        {!! Form::label ('arquivo','Arquivo')!!}
                        {!! Form::input('text', 'arquivo', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Arquivo'])!!}

                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection