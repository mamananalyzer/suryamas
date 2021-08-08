@extends('layout/base')

@section('title', 'Suryamas Elsindo Primatama')

@section('container')

<link rel="stylesheet" href="css/cardhome.css">

<div class="bg">
    <div class="containerr">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="500px" src="{{asset('img/carousel/01. TE Test Block.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h1 class="display-3 text-dark bg">TE Entrelec Test Block</h1>
                  <p class="lead text-dark bg">TCEVA & CCEVA</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/02. ABB LV.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h1 class="display-4 text-dark bg">ABB Low Voltage Product</h5>
                  <p class="lead text-dark bg">Circuit Breaker, Contactor, Relay CRM, Plug & Socket, ETC</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/03. SNK SNA SERIES.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h1 class="display-3 text-dark bg">TE Entrelec Terminal Block</h5>
                  <p class="lead text-dark bg">SNK - SNA - PI Spring</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/04. RITZ INS. TRANS.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h1 class="display-5 text-dark bg">RITZ Instrument Transformer <br> (Formerly WTW, MWB)</h5>
                  <p class="lead text-dark bg">Medium Voltage (3,3 - 72kV) Current - Voltage Transformer, SIS Insulated Busbar, <br> Dry Type Power Transformer</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/05. Relay GE (1).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h1 class="display-3 text-dark bg">GE Grids Solution (Alstom)</h5>
                  <p class="lead text-dark bg">Transmision & Distribution Protection Relay</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row minus-top" style=>
            <div class="col">
                <br>
                <h6 class="mx-5 text-justify">PT. Suryamas Elsindo Primatama is a company that has provided service and electrical installation product since 1996. Our core business scope mainly covers sales and supply of electrical and mechanical components (ME) to most industries, panel maker, automation and retail market. We are agents of the world's leading brands such as ABB Entrelec, GE Grid Solution (Ex. Alstom) and RITZ Transformer (MWB). We have supplied the various electrical products to all different industries. With our presence in the market and directly backed up with manufacturers so as to provide all necessary items, where we provide mostly for panel builder and contractors for daily activities as well as projects in Indonesia.</h6>
                <br>
                <br>
                <br>
            </div>
        </div>

        {{-- <br> --}}

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <video type="video/mp4" autoplay loop muted src="{{asset('video/TE’s DBL Power Distribution Blocks for Electrical Cabinets.mp4')}}" style="width: 100%;"></video>
                </div>
                <div class="col-md">
                    <video type="video/mp4" autoplay loop muted src="{{asset('video/TE Heavy Duty Connectors Enhance Reliability and Flexibility.mp4')}}" style="width: 100%;"></video>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                        <video type="video/mp4" autoplay loop muted src="{{asset('video/TE’s SNK Terminal Blocks- The Innovative Range.mp4')}}" style="width: 100%;"></video>
                </div>
            </div>
        </div>

        <div class="">
            <div class="row">
                <div class="card border-light big col-md img-hover-zoom-big img-hover-zoom--xyz">
                    <a href="{{url('product')}}">
                        <img src="{{asset('image/product/1.png')}}" style=": 100%;" alt="">
                        <div class="bottom-left">
                            <h5 class="left">PRODUCTS</h5>
                            <p class="left">TRANSPORT AND LOGISTIC</p>
                        </div>
                    </a>
                </div>
                <div class="col-md">
                    <div class="row">
                        <div class="col-md card border-light img-hover-zoom-sm img-hover-zoom--xyz">
                            <a href="{{url('clients')}}">
                                <img src="{{asset('image/client/1.png')}}" style="width: 100%;" alt="">
                                <div class="bottom-left-sm">
                                    <h5 class="left-sm">CLIENTS AND PARTNERS</h5>
                                    <p class="left-sm">TRANSPORT AND LOGISTIC</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col card border-light img-hover-zoom-sm img-hover-zoom--xyz">
                            <a href="{{url('about')}}">
                                <img src="{{asset('/img/sep.jpg')}}" style="width: 100%;" alt="">
                                {{-- <video type="video/mp4" controls="autoplay" src="{{asset('video/abb.mp4')}}" style="width: 100%;"></video> --}}
                                <div class="bottom-left">
                                    <h5 class="left">TRANSPORT AND LOGISTIC</h5>
                                    <p class="left">TRANSPORT AND LOGISTIC</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
        <div class="container">
            <video type="video/mp4" autoplay loop muted src="{{asset('video/abb.mp4')}}" style="width: 100%;"></video>
        </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=abb')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="100%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/abb.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">ABB</h4>
                    <p>Air Circuit Breaker, MCCB, Contactor, Minature Relay CRMX, Capacitor Bank, Motor Starter, NAL LBS, Relay Protection, M4M metering & etc</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=elesol')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/elesol.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Elesol (Electrical Solution)</h4>
                    <p>Our saving energy & efficiency solution to reduce electrical consumption up to 15% of billing expenses by filtering noise and electromagnetic waves around the area</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=ge')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ge.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Ge Grid Solution - Alstom</h4>
                    <p>Relay Protection & MMLG MMLB Test Block</p>
                </article>
                </a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=hilkar')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="100%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/hilkar.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Hilkar</h4>
                    <p>Neutral Grounding Resistor (NGR) & MV-HV Reactors</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=ritz')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ritz.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">RITZ Instrument Transformer ( ex MWB )</h4>
                    <p>Medium Voltage Current & Voltage Transformer, Solid Insulated Busbar System ( MV Busbar), MV Dry Type Power Transformer & Sensors Transformer CVT</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=te')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/te.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">TE Connectivity</h4>
                    <p>Entrelec Terminal Blocks ( Screw Clamp - PI Spring), Essailec Test Blocks (Tceva - Cceva), Heavy Duty Connector & Distribution Block (DBL).</p>
                </article>
                </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="430px" src="{{asset('img/newproduct/CR-M RELAY.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/DBL.jpg')}}" class="d-block w-100" alt="{{asset('img/carousel/05. Relay GE (1).jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/DBL.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/ELESOL.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/HDC (1).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/HDC.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/NGR.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/PLUG & SOCKET.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  {{-- <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <hr>


</div>

@endsection
