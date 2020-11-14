@extends('layouts.app')

@section('content')

<div class="content-catalogo">
  <img class="img-fluid" src="{{ asset('images/catalogo/banner.png')}}" alt="">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <div class="filter-col">
          <h2>Filtros</h2>
          <hr>
          <div class="section">
            <p class="subtitle">Por modalidad</p>
            <div class="custom-control custom-radio">
              <input type="radio" id="prepago" name="modalidad" class="custom-control-input">
              <label class="custom-control-label" for="prepago">Prepago</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="postpago" name="modalidad" class="custom-control-input">
              <label class="custom-control-label" for="postpago">Postpago</label>
            </div>
          </div>
          <div class="section">
            <p class="subtitle">Por marca</p>
            <div class="custom-control custom-radio">
              <input type="radio" id="samsung" name="marca" class="custom-control-input">
              <label class="custom-control-label" for="samsung">Samsung</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="huawei" name="marca" class="custom-control-input">
              <label class="custom-control-label" for="huawei">Huawei</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="apple" name="marca" class="custom-control-input">
              <label class="custom-control-label" for="apple">Apple</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="lg" name="marca" class="custom-control-input">
              <label class="custom-control-label" for="lg">LG</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="xiaomi" name="marca" class="custom-control-input">
              <label class="custom-control-label" for="xiaomi">Xiaomi</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="filter">
          <input class="input-filter" type="text" placeholder="Busca tu equipo">
          <input class="input-filter-m" type="text" placeholder="Filtro">
          <img src="{{ asset('images/catalogo/search.png')}}" alt="search">
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <a href="{{ route('getdetailproduct', ['id' => 1]) }}">
              <div class="card">
                <img src="{{ asset('images/card/img-1.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Samsung</h5>
                  <h6 class="card-subtitle">Galaxy A10s 32GB</h6>
                  <hr>
                  <p class="card-text mb-2">Prepago chévere</p>
                  <div class="d-flex align-items-center">
                    <p class="price mb-0">s/679</p>
                    <p class="payment mb-0 ml-2">Al contado</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop