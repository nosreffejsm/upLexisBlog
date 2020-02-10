@extends('layouts.app')

@section('content')
<div class="container">

<div class="content-heading clearfix">
    <div class="heading-left">
    <h1 class="page-title"> 
        @if (count($registros) === 1)
    <i class="fas fa-file-download"></i> Exibindo Artigo Salvos!
        @elseif (count($registros) > 1)
    <i class="fas fa-file-download"></i> Exibindo Artigos Salvos!
        @else
    <i class="far fa-times-circle"></i> Não foi localizado nenhum artigo. 
        @endif

    </h1>
        <p class="page-subtitle">  </p>
    </div>
</div>

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
            <td><a class="btn btn-outline-danger" href="{{route('artigosDel',$registro->id)}}" onclick = "msgAdd(1,'REGISTRO EXCLUIDO COM SUCESSO')" role="button">Excluir</a>
              <td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection

