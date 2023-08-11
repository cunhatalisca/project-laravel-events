@extends('site.layout')
@section('conteudo')

<div class="row container">
  <div class="col s12 m6">
    <img src="{{ $uniqueEvent->image }} class="responsive-img">
  </div>
  <div class="col s12 m6">
    <h1>{{$uniqueEvent->name}}</h1>
    <p>{{$uniqueEvent->description}}</p>
    <p>Evento cadastrado por: {{ $uniqueEvent->user->firstName }}</p>
    <button class="btn orange btn-large"><a href="/">Voltar para a página inicial</a></button>
  </div>
</div>

@endsection