@extends('layouts.app')
@section('content')
<div class="w-100">
  <div class="slick-carousel">
    <div> 
      <img class="logo w-100 d-block" src="{{ asset('images/slides/slide1.png') }}" alt="slide claro">
    </div>
    <div> 
      <img class="logo w-100 d-block" src="{{ asset('images/slides/slide1.png') }}" alt="slide claro">
    </div>
    <div> 
      <img class="logo w-100 d-block" src="{{ asset('images/slides/slide1.png') }}" alt="slide claro">
    </div>
    <div> 
      <img class="logo w-100 d-block" src="{{ asset('images/slides/slide1.png') }}" alt="slide claro">
    </div>
  </div>
</div>
<div class="content">
  <section class="best-seller">
    <h2>Lo más vendido</h2>

    <!-- <div class="content">
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
    </div> -->
    <div>
    <div class="slick-carousel-card">

      <div>
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
          <img class="franja" src="{{ asset('images/home/franja.png') }}" alt="">
          <img class="oferta" src="{{ asset('images/home/oferta.png') }}" alt="">
        </div>
      </div>

      <div>
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
          <img class="franja" src="{{ asset('images/home/franja.png') }}" alt="">
          <img class="oferta" src="{{ asset('images/home/oferta.png') }}" alt="">
        </div>
      </div>

      <div>
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
          <img class="franja" src="{{ asset('images/home/franja.png') }}" alt="">
          <img class="oferta" src="{{ asset('images/home/oferta.png') }}" alt="">
        </div>
      </div>

      <div>
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
          <img class="franja" src="{{ asset('images/home/franja.png') }}" alt="">
          <img class="oferta" src="{{ asset('images/home/oferta.png') }}" alt="">
        </div>
        </div>
      
      </div>
    </div>
    <div>
      <a class="more" href="{{ route('getproducts') }}"> Ver más equipos </a>
    </div>
  </section>

  <div class="home">
    <h2>Internet, TV y Telefonía para tu Hogar</h2>
    <div class="content row">
      <div class="col-lg-4 pb-4 py-lg-0">
        <div class="card">
          <img src="{{ asset('images/card/home1.png') }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Hogar 1 Play</h5>
            <hr>
            <div class="service">
              <img class="internet1" src="{{ asset('images/card/internet.png') }}" alt="internet">
            </div>
            <div class="d-flex">
              <a role="button" href="{{ route('getPlayuno') }}" class="btn btn-lg">Ver Planes</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pb-4 py-lg-0">
        <div class="card">
          <img src="{{ asset('images/card/home2.png') }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Hogar 2 Play</h5>
            <hr>
            <div class="service">
              <img class="internet2" src="{{ asset('images/card/internet2.png') }}" alt="internet">
            </div>
            <div class="d-flex">
              <a type="button" class="btn btn-lg" href="{{ route('getPlaydos') }}">Ver Planes</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pb-4 pb-lg-0">
        <div class="card">
          <img src="{{ asset('images/card/home3.png') }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Hogar 3 Play</h5>
            <hr>
            <div class="service">
              <img class="internet3" src="{{ asset('images/card/internet3.png') }}" alt="internet">
            </div>
            <div class="d-flex">
              <a type="button" class="btn btn-lg" href="{{ route('getPlaytres') }}">Ver Planes</a>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
@stop