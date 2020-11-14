@extends('layouts.app')
@section('content')

  <div class="content-ubicaciones container">
    <h2>Nuestras tiendas</h2>
    <div class="row">
    <div class="col-lg-6">
      <div class="contenido">
        <p class="distrito">Independencia</p>
        <div class="row detalle">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="pointer" src="{{ asset('images/tiendas/pointer.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Dirección</p>
            <p class="mb-0">C.C. Plaza Norte 1er Nivel (Al costado de KFC)</p>
          </div>
        </div>
        <div class="row detalle">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="clock" src="{{ asset('images/tiendas/clock.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Horario de atención</p>
            <p class="mb-0">Lunes a Domingo de 10 am a 8 pm</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="contenido">
        <p class="distrito">Independencia</p>
        <div class="row detalle">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="pointer" src="{{ asset('images/tiendas/pointer.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Dirección</p>
            <p class="mb-0">C.C. Plaza Norte 1er Nivel (Al costado de KFC)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="clock" src="{{ asset('images/tiendas/clock.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Horario de atención</p>
            <p class="mb-0">Lunes a Domingo de 10 am a 8 pm</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="contenido">
        <p class="distrito">Independencia</p>
        <div class="row detalle">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="pointer" src="{{ asset('images/tiendas/pointer.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Dirección</p>
            <p class="mb-0">C.C. Plaza Norte 1er Nivel (Al costado de KFC)</p>
          </div>
        </div>
        <div class="row detalle">
          <div class="col-1 d-flex align-items-baseline justify-content-center pt-1">
            <img class="clock" src="{{ asset('images/tiendas/clock.png') }}" alt="">
          </div>
          <div class="col-11 px-lg-0">
            <p class="mb-0 font-weight-bold">Horario de atención</p>
            <p class="mb-0">Lunes a Domingo de 10 am a 8 pm</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>


@stop