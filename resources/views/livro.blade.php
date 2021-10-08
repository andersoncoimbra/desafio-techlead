@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Painel</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{route('alterar.registro', ['livro'=> $livro->id])}}" method="post">
                @csrf
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Atualizar Livro</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo">Titulo do livro</label>
                            <input hidden type="text" name="id" id="id" value="{{$livro->id}}">
                            <input  class="form-control" id="titulo" name="titulo" value="{{$livro->titulo}}" placeholder="Digite o titulo do livro">
                        </div>
                        <div class="form-group">
                            <label for="autor">Autor do livro</label>
                            <input  class="form-control" id="titulo" name="autor"  value="{{$livro->autor}}" placeholder="Digite o Autor do livro">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Livros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Titulo</th>
                          <th>Autor</th>
                          <th>Registrado em</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse  ($livros as $livro)
                        <tr>
                            <td>{{$livro->id}}</td>
                            <td>{{$livro->titulo}}</td>
                            <td>{{$livro->autor}}</td>
                            <td>{{$livro->created_at}}</td>
                            @if(Gate::allows('atualizar-livro', $livro))
                            <td><a href="{{route('livro.registro', ['livro'=>$livro->id])}}">Alterar</a></td>
                            <td><a href="{{route('excluir.registro', ['livro'=>$livro->id])}}">Excluir</td>
                            @else
                            <td></td>
                            <td></td>
                            @endif
                        </tr>
                      @empty
                        Sem livros
                      @endforelse 
                  </tbody>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">

              </ul>
            </div>
          </div>
    </div>
@stop