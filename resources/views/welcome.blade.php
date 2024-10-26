@extends('layouts.main')

@section('title', 'Eventus')

@section('content')

    <div class="banner">
        <img src="../img/banner-eventus.png" alt="">
    </div>
    
    <div id="search-container"  class="col-md-12">
        <div id="input-container">
            <form action="">
                <input type="text" name="search" id="search" class="form-control" placeholder="Buscar evento">
            </form>
        </div>
    </div>

    <div id="events-container" class="cold-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/fmft5452_optimized-scaled.jpg" alt="{{ $event->title}}">
                <div class="card-body">
                    <p class="card-date">24/10/2024</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participantes">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- <div id="div-banner-home">
        <img src="img/EVENTOS-CORPORATIVOS-FOTOS-E-VÍDEOS-5-1600x1068.jpg" alt="Banner inicial" id="banner-home" >
    </div> -->

    
@endsection