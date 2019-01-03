@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Projetos
                        <a  class="pull-right" href="{{url('projetos/novo')}}">Publicar Projeto</a>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <th>Nome</th>
                            <th>Autor</th>
                            <tbody>
                                @foreach($projetos as $projeto)
                                <tr>
                                <td>{{$projeto->name}}</td>
                                <td>{{$projeto->autor}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
