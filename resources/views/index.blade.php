@extends('layout')

@section('content')
  <div class="title">
    <img src="https://lorempixel.com/300/200/food/1" width="70" alt="Foodie image">
    <div class="title-text">
        <h1 id="title">Foodie 0.1</h1>
        <h2>Teman setia perut kelaparan</h2>
    </div>
  </div>
  <div class="menu">
    <h2 class="menu-title">Daftar Menu</h2>
    <div class="menu-container">
      @foreach($menus as $menu)
        <article class="menu-item">
          <a href="{{ '/detail/'.$menu->id }}">
              <img class="menu-img" src="{{ $menu->picture_url }}" alt="{{ $menu->title }}">
              <div class="menu-text">
                  <h3 class="menu-name">{{ $menu->title }}</h3>
                  <h4 class="menu-price">Rp{{ $menu->base_price }}</h4>
              </div>
          </a>
        </article>
      @endforeach
    </div>
  </div>
@endsection
