@extends('layouts.app')

@section('content')
<div class="container">

        <div class="heading-left">
            <h1 class="page-title"><i class="fas fa-info-circle"></i> Dashboard admin</h1>
            <p class="page-subtitle">
                Algumas informações importantes</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> <i class="fas fa-chevron-circle-down"></i>
              Menu de navegação.
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fas fa-home"></i> - Página inicial.</li>
              <li class="list-group-item"><i class= "fas fa-search-plus"></i> - Resultado da pequisa.</li>
              <li class="list-group-item"><i class="fas fa-file-download"></i> - Artigos Salvos</li>
            </ul>
          </div>   

          <div  style="width: 10rem;">
 
          </div>
          
          <div class="card" style="width: 24rem;">
            <div class="card-header"><i class="fas fa-microchip"></i>
              Técnologias utilizadas.
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fab fa-php"></i> php: ^7.2 </li>
                <li class="list-group-item"><i class="fab fa-laravel"></i> laravel/framework: ^6.2 </li>
                <li class="list-group-item"><i class="fab fa-laravel"></i> laravel-mix: ^5.0.1 </li>
                <li class="list-group-item"><i class="fab fa-laravel"></i> laravel/tinker: ^2.0 </li>
                <li class="list-group-item"><i class="fab fa-laravel"></i> laravel/ui: ^1.1 </li>
                <li class="list-group-item"><i class="fab fa-bootstrap"></i> bootstrap: ^4.0.0 </li>
            </ul>
          </div>

    </div>
</div>

@endsection

