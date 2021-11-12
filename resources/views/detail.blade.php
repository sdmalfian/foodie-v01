@extends('layout')

@section('content')
    <article class="menu-detail">
        <img class="menu-img" src="{{ $menu->picture_url }}" alt="{{ $menu->title }}">
        <div class="menu-text">
            <h1 class="menu-name">{{ $menu->title }}</h1>
            <h2 class="menu-detail-price">Rp{{ $menu->base_price }}</h2>
            <h3 class="menu-description">{{ $menu->description }}</h3>
        </div>
        <hr>
        <h4 class="menu-categories">Kategori: {{ implode(", ",$menu->categories) }}</h4>
  </article>
  <a class="back-menu" href="/">Back to menu</a>
@endsection