@extends('layouts.app')
@section('content')
<div class="content-play">
  <div class="content-banner">
    <nav class="bread" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">INICIO</a></li>
        <li class="breadcrumb-item active" aria-current="page">HOGAR 2PLAY</li>
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

  <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pills-fijo-tab" data-toggle="pill" href="#pills-fijo" role="tab" aria-controls="pills-fijo" aria-selected="true">Internet + Telefonía</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pills-inalambrico-tab" data-toggle="pill" href="#pills-inalambrico" role="tab" aria-controls="pills-inalambrico" aria-selected="false">Internet + TV</a>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-fijo" role="tabpanel" aria-labelledby="pills-fijo-tab">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 20 Mbps + Telefonia
                </p> 
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/59.00</p>

                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/69.00</p>

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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 40 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/69.00</p>

                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/80.00</p>

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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 80 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/89.00</p>
                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/100.00</p>

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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 150 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/139.00</p>
                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/150.00</p>
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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 240 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/189.00</p>
                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/210.00</p>
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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 600 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/379.00</p>
                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/400.00</p>
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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
                </div>
                <a href="#" class="btn btn-send">Lo Quiero</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                Internet 1000 Mbps + Telefonia</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  <img src="{{ asset('images/play/price.png')}}" alt="price">
                  Promoción primer mes
                </h5>
                <p class="card-text mb-0">S/479.00</p>
                <p class="price-m border-bottom pb-3 mb-0">Precio mensual: s/500.00</p>
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
                <div class="row px-md-3 py-2 d-flex align-items-center">
                  <img class="phone-b" src="{{ asset('images/play/telefono.png')}}" alt="telefono">
                  <span class="ml-2 subt-text-2">Ilimitadas a claro + 100 Min. Nivel <br> Nacional</span>
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

    <div class="tab-pane fade" id="pills-inalambrico" role="tabpanel" aria-labelledby="pills-inalambrico-tab">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 mb-5">
            <div class="card">
              <div class="header">
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 20 Mbps + TV Básico
                </p> 
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/124.00</p>

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
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 40 Mbps + TV Avanzado</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/145.00</p>

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
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 80 Mbps + TV Avanzado</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/165.00</p>

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
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 150 Mbps + TV Superior</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/265.00</p>
               
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
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 240 Mbps + TV Superior</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/325.00</p>

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
                <p class="mb-0">Hogar 2 PLAY  <br>
                  Internet 600 Mbps + TV Superior</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/515.00</p>

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
                <p class="mb-0">Hogar 2 PLAY  <br>
                Internet 1000 Mbps + TV Superior</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  Precio mensual
                </h5>
                <p class="card-text border-bottom pb-3 mb-0">S/615.00</p>

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