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
                  <h5>TE Entrelec Test Block</h5>
                  <p>TCEVA & CCEVA</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/02. ABB LV.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h5>ABB Low Voltage Product</h5>
                  <p>Circuit Breaker, Contactor, Relay CRM, Plug & Socket, ETC</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/03. SNK SNA SERIES.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h5>TE Entrelec Terminal Block</h5>
                  <p>SNK - SNA - PI Spring</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/04. RITZ INS. TRANS.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h5>RITZ Instrument Transformer (Formerly WTW, MWB)</h5>
                  <p>Medium Voltage (3,3 - 72kV) Current - Voltage Transformer, SIS Insulated Busbar, Dry Type Power Transformer</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="500px" src="{{asset('img/carousel/05. Relay GE (1).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                  <h5>GE Grids Solution (Alstom)</h5>
                  <p>Transmision & Distribution Protection Relay</p>
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
                        {{-- <div class="col-md card border-light img-hover-zoom-sm img-hover-zoom--xyz">
                            <a href="{{url('services')}}">
                                <img src="{{asset('image/product/2.png')}}" style="width: 100%;" alt="">
                                <div class="bottom-left-sm">
                                    <h5 class="left-sm">SERVICES</h5>
                                    <p class="left-sm">TRANSPORT AND LOGISTIC</p>
                                </div>
                            </a>
                        </div> --}}
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
                            <a href="{{url('..')}}">
                                <img src="{{asset('image/product/1.png')}}" style="width: 100%;" alt="">
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

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=abb')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="140%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/abb.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=elesol')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/elesol.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=ge')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ge.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
                </article>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=hilkar')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="100%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/hilkar.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=ritz')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ritz.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
                </article>
                </a>
            </div>

            <div class="col-md-6 col-lg-4">
                <a href="{{url('/product?brand=te')}}">
                <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                    <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/te.png')}}" alt="Image Description">
                    <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
                    <p>Finding your perfect product</p>
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
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/DBL.jpg')}}" class="d-block w-100" alt="{{asset('img/carousel/05. Relay GE (1).jpg')}}">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/DBL.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/ELESOL.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/HDC (1).jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/HDC.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/NGR.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img height="430px" src="{{asset('img/newproduct/PLUG & SOCKET.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
