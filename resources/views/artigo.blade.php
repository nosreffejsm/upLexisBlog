@extends('layout.site')

@section('titulo','Lista de Artigos')

@section('conteudo',)

<div class="bd-callout bd-callout-info">

<div class="container">
<table class="table table-striped table-dark">
    <thead>
      <tr> 
        <th scope="col">id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Link</th>
        <th scope="col">Data criação</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registros as $registro)
      <tr>
        <th scope="row">{{$registro->id}}</th>
        <td>{{$registro->titulo}}</td>
        <td><a target="_blank" class="nav-link p-2" href="{{$registro->link}}">{{$registro->link}}</a></td>
        <td>{{$registro->created_at}}</td>
        <td><a class="btn btn-outline-danger my-2 my-sm-0" href="{{route('artigosDel',$registro->id)}}" role="button">Excluir</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
    
@endsection
