@extends('layouts.home')

@section('conteudo')
  <div style="display: flex; justify-content: center;">
    <img src="/img/wikiTitulo.png" alt="titulo" width="22%"/>
  </div>

  <div class="cards">
    <div class="card" style="width: 18rem;">
      <img src="/img/cards/deuses.jpg" width="100px" class="card-img-top" alt="deuses"/>
      <div class="card-body">
        <h5 class="card-title">Deuses</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('wiki.deuses')}}" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/cards/personagens.jpg" class="card-img-top" alt="personagens" width="100px">
      <div class="card-body">
        <h5 class="card-title">Heróis</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('wiki.personagens')}}" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/cards/monstros.jpg" class="card-img-top" alt="monstros" width="100px">
      <div class="card-body">
        <h5 class="card-title">Monstros</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('wiki.monstros')}}" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="/img/cards/outros.jpg" class="card-img-top" alt="outras aparições" width="100px">
      <div class="card-body">
        <h5 class="card-title">Outros</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('wiki.outros')}}" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
  </div>
@endsection