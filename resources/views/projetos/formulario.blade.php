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

                            <div class="alert alert-success">{{Session::get('messagem_sucesso')}}</div>
                        <form class="form-horizontal" method="POST" action="{{ route('projetos.salvar') }}">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{$userId}}" name="userId">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('autor') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Autor</label>

                                <div class="col-md-6">
                                    <input id="name" type="autor" class="form-control" name="autor" value="{{ old('autor') }}" required autofocus>

                                    @if ($errors->has('autor'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('autor') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                <label for="descricao" class="col-md-4 control-label">Descrição</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="descricao" class="form-control" name="descricao" value="{{ old('descricao') }}" required autofocus>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('arquivo') ? ' has-error' : '' }}">
                                <label for="arquivo" class="col-md-4 control-label">Arquivo</label>

                                <div class="col-md-6">
                                    <input id="arquivo" type="arquivo" class="form-control" name="arquivo" value="{{ old('arquivo') }}" required autofocus>

                                    @if ($errors->has('arquivo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('arquivo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection