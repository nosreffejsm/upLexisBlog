<!doctype html>
<html lang="pt=br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('titulo','upLexis Blog Search')</title>
  </head>
  <body>
        <!-- Navbar content -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home">upLexis Blog Search</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="btn btn-outline-info my-2 my-sm-0" href="{{route('home')}}" role="button">Nova Busca</a>
            </li>
            <li class="nav-item active">
              <a class="" ></a>
          </li>
            <li class="nav-item active">
              <a class="btn btn-outline-info my-2 my-sm-0" href="{{route('artigosList')}}" role="button">Artigos Salvos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-outline-danger my-2 my-sm-0" href="{{route('sair')}}" role="button">Sair</a>
          </form>
        </div>
      </nav>



      <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">

      <nav class="navbar navbar-light" style="background-color: #FFF;">
        
        
        
