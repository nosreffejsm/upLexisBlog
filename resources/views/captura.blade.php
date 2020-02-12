@extends('layouts.app')

@section('content')
<div class="container">

    <div class="content-heading clearfix">
        <div class="heading-left">
        <h1 class="page-title"> 
            @if (count($temps) === 1)
        <i class="fas fa-search-plus"></i> Exibindo Resutado da sua busca!
            @elseif (count($temps) > 1)
        <i class="fas fa-search-plus"></i> Exibindo Resutados da sua busca!
            @else
        <i class="far fa-times-circle"></i> Não existe nenhuma busca recente. faça uma nova busca. 
            @endif

        </h1>
            <p class="page-subtitle">  </p>
        </div>
    </div>

    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="row">
                @foreach($temps as $temp)
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><a href="{{$temp->link}}"><img class="card-img-top scale-on-hover" src="{{$temp->img}}" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a target="_blank" href="{{$temp->link}}">{{$temp->titulo}}</a></h6>
                                <p class="text-muted card-text">
                                    <a class="btn btn-primary" target="_blank" href="{{$temp->link}}" role="button">Continue Lendo</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </main>
</div>

@endsection

