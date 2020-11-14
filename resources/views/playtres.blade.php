@extends('layouts.app')
@section('content')
<div class="content-play-3">
  <div class="content-banner">
    <nav class="bread" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">INICIO</a></li>
        <li class="breadcrumb-item active" aria-current="page">HOGAR 3PLAY</li>
      </ol>
    </nav>

    <div class="title">
      Encuentra el plan <br> que se adapte a <br> tu hogar
    </div>
    <img class="img-fluid banner" src="{{ asset('images/play/playuno.png')}}" alt=""> 
  </div>

  <div class="detail-play">
    <img src="{{ asset('images/play/claro-video.png')}}" alt="claro video">
    <p class="mb-0">Todos nuetros planes de HFC y Fibra Óptica vienen con <span class="font-weight-bold">Claro Video</span></p>
  </div>

  <div class="container-fluid">
    <h2 class="title">3 Play: Internet + TV + Telefonía</h2>

    <div class="row">

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/109.00</p>

            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/134.00</p>

            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">20 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">3 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Basico con</span> 16 canales HD + <br> 113 en SD + 50 de audio + 1 Deco <br>  HD </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/129.00</p>

            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/155.00</p>

            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">40 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">4 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold">TV Avanzado con </span> 62 canales HD + <br> 113 en SD + 50 de audio + 1 Deco <br>  HD </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/149.00</p>
            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/175.00</p>

            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">80 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">8 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Avanzado con </span> 62 canales HD + <br> 113 en SD + 50 de audio + 1 Deco <br>  HD </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/239.00</p>
            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/270.00</p>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">150 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">15 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Superior con </span> 81 canales HD + <br> 140 en SD + 50 de audio + 1 Deco <br>  HD y Paquete HBO </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
              <p class="mb-0">Hogar 3 PLAY  <br>
                Internet 20 Mbps + TV + Telefonia
              </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/289.00</p>
            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/329.00</p>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">240 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">25 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Superior con </span> 81 canales HD + <br> 140 en SD + 50 de audio + 1 Deco <br>  HD y Paquete HBO </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/460.00</p>
            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/520.00</p>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">600 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">50 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Superior con </span> 81 canales HD + <br> 140 en SD + 50 de audio + 1 Deco <br>  HD y Paquete HBO </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5">
        <div class="card">
          <div class="header">
            <p class="mb-0">Hogar 3 PLAY  <br>
              Internet 20 Mbps + TV + Telefonia
            </p> 
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <img src="{{ asset('images/play/price.png')}}" alt="price">
              Promoción primer mes
            </h5>
            <p class="card-text mb-0">S/560.00</p>
            <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/620.00</p>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad de <br> descarga ilimitada
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">1000 Mbps</div>
            </div>
            <div class="row py-3 border-bottom m-0">
              <div class="col-7 first font-weight-bold p-0">
                Velocidad máxima  <br> de subida
              </div>
              <div class="col-5 second d-flex align-items-center justify-content-end p-0">50 Mbps</div>
            </div>
            <div class="row px-md-3 py-3 d-flex align-items-center border-bottom">
              <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
              <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
            </div>
            <div class="row px-md-2 py-2 d-flex align-items-center">
              <img class="tele" src="{{ asset('images/play/televisor.png')}}" alt="televisor">
              <span class="ml-2 subt-text-2"> <span class="font-weight-bold"> TV Superior con </span> 81 canales HD + <br> 140 en SD + 50 de audio + 1 Deco <br>  HD y Paquete HBO </span>
            </div>
            <a href="#" class="btn btn-send">Lo Quiero</a>
          </div>
        </div>
      </div>

    </div>

    <p class="text-end"> <span>*Debes saber: </span> Todos los planes están sujeto a evaluación crediticia, facilidades técnicas y cobertura. Aplica tarifa de instalación: S/ 120, válida hasta el 03/11/20; se paga en cuotas: cuota inicial de S/ 60 que debe pagarse previo a la instalación y la diferencia se factura en 6 cuotas de S/10 al mes. Para velocidades de 150 Mbps y 240 Mbps, luego de 1000 GB de consumo, la velocidad máx. de descarga será de 10 Mbps. Para velocidades de 600 Mbps y 1000 Mbps, luego de 2000 GB de consumo, la velocidad máx. de descarga será de 10 Mbps, para el resto de planes, luego de 1000 GB de consumo, la velocidad máx. de descarga será de 4Mbps. Las velocidades de 600 Mbps y 1000 Mbps disponibles en Lima: en distritos de La Molina, Miraflores, Surco. Sujeto a cobertura.

    </p>
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