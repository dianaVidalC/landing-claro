@extends('layouts.app')
@section('content')
<div class="content">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('getproducts') }}">Catálogo</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
    </ol>
  </nav>
  <ul class="nav nav-pills d-flex justify-content-center mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-equipo-tab" data-toggle="pill" href="#pills-equipo" role="tab" aria-controls="pills-equipo" aria-selected="true">Equipo</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Detalle</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-equipo" role="tabpanel" aria-labelledby="pills-equipo-tab">
     <div class="row">
       <div class="col-lg-5">
        <div class="slider-for">
          <div>
            <img src="{{ asset('images/producto/samsung-frontal.png') }}" alt="">
          </div>
          <div>
            <img src="{{ asset('images/producto/samsung-perfil.png') }}" alt="">
          </div>
          <div>
            <img src="{{ asset('images/producto/samsung-posterior.png') }}" alt="">
          </div>
        </div>
        <div class="slider-nav">
          <div>
            <img src="{{ asset('images/producto/samsung-frontal.png') }}" alt="">
          </div>
          <div>
            <img src="{{ asset('images/producto/samsung-perfil.png') }}" alt="">
          </div>
          <div>
            <img src="{{ asset('images/producto/samsung-posterior.png') }}" alt="">
          </div>
        </div>
      </div>
       <div class="col-lg-7">
         <h2>
            Samsung  Galaxy A10s 32GB
         </h2>
         
         <div class="col-md-4 mb-3">
          <label for="modalidad">Elige una modalidad</label>
          <select class="custom-select" id="modalidad" required>
            <option selected disabled value="">...</option>
            <option value="1">Postpago</option>
            <option value="2">Prepago</option>
            <option value="3">Portabilidad</option>
            <option value="4">Línea nueva</option>
          </select>
        </div>

        <div class="col-md-4 mb-3 operador">
          <label for="operador">Operador actual</label>
          <select class="custom-select" id="operador" required>
            <option selected disabled value="">...</option>
            <option value="1">Entel</option>
            <option value="2">Movistar</option>
            <option value="3">Bitel</option>
          </select>
        </div>

        <div class="col-md-4 mb-3">
          <label for="plan">Elige un plan</label>
          <select class="custom-select" id="plan" required>
            <option selected disabled value="">...</option>
            <option class="ilimitado" value="1">Max ilimitado 65</option>
            <option class="limitado" value="2">Max 29.90</option>
          </select>
        </div>

        <div class="detail">
          <img src="{{ asset('images/producto/detalle.png') }}" alt="">

          <div class="row row-content d-flex align-items-center">
            <div class="col-md-6">
              <div class="row">
                <div class="col-7 line-h">
                  <p class="mb-0 ilimitado-text font-weight-bold">Gigas en alta <br> velocidad</p>
                  <p class="mb-0 font-weight-bold limitado-text">Internet</p>
                </div>
                <div class="col-5 line-h d-flex align-items-center">
                  <p class="mb-0">6 GB</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-5 line-h">
                  <p class="mb-0 font-weight-bold">Apps ilimitadas</p>
                </div>
                <div class="col-7 line-h">
                    <p class="mb-0"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-content two d-flex align-items-center">
            <div class="col-md-6">
              <div class="row">
                <div class="col-7 line-h">
                  <p class="mb-0 ilimitado-text font-weight-bold">Internet, <br> Minutos y SMS </p>
                  <p class="mb-0 font-weight-bold limitado-text">Minutos y SMS </p>
                </div>
                <div class="col-5 line-h d-flex align-items-center">
                  <p class="mb-0">Ilimitados</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 ilimitado-text">
              <div class="row">
                <div class="col-5 line-h">
                  <p class="mb-0 font-weight-bold">Beneficios <br> adicionales </p>
                </div>
                <div class="col-7 line-h">
                <img class="adicional-img" src="{{ asset('images/producto/adicionales.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="subtitle ilimitado-text">Ahorra con <strong> Full Claro y recibe el 50%</strong> más de datos de <strong>alta velocidad</strong></p>

        <div class="payment">
          <p class="mb-1 font-weight-bold">¿Cómo pagarás el equipo?</p>
          <div class="d-flex">
            <label class="container">Al contado
              <input type="radio" checked="checked" name="radio">
              <span class="checkmark"></span>
            </label>
            <label class="container">*En 12 cuotas
              <input type="radio" name="radio">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>

        <div class="row cuotas">
          <div class="col-6">
           <span class="font-weight-bold"> S/ 106.08 </span><br>
            x 12 meses
          </div>
          <div class="col-6 d-flex justify-content-end align-items-center">
            <span class="monto"> S/ 0</span>
          </div>
          <div class="col-6 ml-auto">
            <span>Precio regular: </span> S/1273
          </div>
        </div>

        <button class="btn-like" data-toggle="modal" data-target="#datos">Lo Quiero</button>

        <p class="evaluacion">*Sujeto a evaluación crediticia</p>
       </div>
     </div>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="content">
        <!-- <h2>Nuestras tiendas</h2>
        <div class="col-6">
          <div class="contenido">
            <p>Independencia</p>
            <div class="row">
              <div class="col-2">
                <img src="{{ asset('images/detalle/pointer.png') }}" alt="">
              </div>
              <div class="col-10">
                <p class="mb-0 font-weight-bold">Dirección</p>
                <p class="mb-0">C.C. Plaza Norte 1er Nivel (Al costado de KFC)</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <img src="{{ asset('images/detalle/clock.png') }}" alt="">
              </div>
              <div class="col-10">
                <p class="mb-0 font-weight-bold">Horario de atención</p>
                <p class="mb-0">Lunes a Domingo de 10 am a 8 pm</p>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row w-100">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-2 d-flex justify-content-center align-items-baseline">
                <img src="{{ asset('images/detalle/camara-principal.png') }}" alt="">
              </div>
              <div class="col-10">
                <div class="mb-0 parraf-1">Cámara Principal</div>
                <div class="mb-0 parraf-2">12Mpx con flash</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-2 d-flex justify-content-center align-items-baseline">
                <img src="{{ asset('images/detalle/camara-principal.png') }}" alt="">
              </div>
              <div class="col-10">
                <div class="mb-0 parraf-1">Cámara Principal</div>
                <div class="mb-0 parraf-2">12Mpx con flash</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-2 d-flex justify-content-center align-items-baseline">
                <img src="{{ asset('images/detalle/camara-principal.png') }}" alt="">
              </div>
              <div class="col-10">
                <div class="mb-0 parraf-1">Cámara Principal</div>
                <div class="mb-0 parraf-2">12Mpx con flash</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="modal fade" id="datos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Déjanos tus datos para contactarte.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
          <img src="{{ asset('images/modal/close.png') }}" alt="close">
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="form-row">
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" placeholder="Nombres">
            </div>
            <div class="col-lg-6 mb-4">
            <input type="text" class="form-control" placeholder="Apellidos">
              </div>
          </div>
          <div class="form-row">
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" placeholder="Nombres">
            </div>
            <div class="col-lg-6 mb-4">
                <input type="text" class="form-control" placeholder="Celular">
              </div>
          </div>
          <div class="form-row">
             <div class="form-group col-lg-6">
                <label for="departamento">Departamento</label>
                <select id="departamento" class="custom-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label for="provincia">Provincia</label>
                <select id="provincia" class="custom-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
          </div>
          <div class="form-row">
             <div class="form-group col-lg-6">
                <label for="distrito">Distrito</label>
                <select id="distrito" class="custom-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label for="payment">Método de pago</label>
                <select id="payment" class="custom-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-12">
                <label for="">Dirección de Entrega</label>
                <input type="text" class="form-control address" placeholder="Dirección">
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Autorizo el  tratamiento de mis datos personales
              </label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label" for="invalidCheck2">
                Condiciones de entrega
              </label>
            </div>
          </div>

          <div class="form-group text-center mb-0">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-send mx-auto" id="send">Enviar mis datos</button>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="gracias" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
          <img src="{{ asset('images/modal/close.png') }}" alt="close">
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid text-center centered">
            <h2 class="title-gracias">¡GRACIAS!</h2>
            <p>Una de nuestras operadoras se <br> comunicará contigo.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop