@extends('layout/base')

@section('title', 'Suryamas Elsindo Primatama')

@section('container')
        <br>
        <!-- <div class="test"></div> -->
       
        <br>
        <div class=containerr>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('image/product/snk.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('image/product/snk2.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('image/product/relay.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('image/product/1.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
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
                <!-- <div class="col">
                    <h6>Imbema helps organisations in industry, the energy sector, and transport and logistics to create safe, efficient working environments. We have the resources and concepts needed to provide insight into processes and management of operational assets. Our specialists also provide support in engineering and installation. Together with customers and manufacturers, we devise the innovations that respond to market demands.</h6>
                </div> -->
            </div>

            <div class="">
                <div class="row">
                    <div class="card border-light big col-md img-hover-zoom-big img-hover-zoom--xyz">
                        <a href="{{url('products')}}">
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
                                <a href="{{url('services')}}">
                                    <img src="{{asset('image/product/2.png')}}" style="width: 100%;" alt="">
                                    <div class="bottom-left-sm">
                                        <h5 class="left-sm">SERVICES</h5>
                                        <p class="left-sm">TRANSPORT AND LOGISTIC</p>
                                    </div>
                                </a>
                            </div>
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
                {{-- <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col card border-light img-hover-zoom-md img-hover-zoom--xyz">
                                <img src="../products/4.jpg" style="width: 100%;" alt="">
                                <div class="bottom-left">
                                    <h5 class="left">TRANSPORT AND LOGISTIC</h5>
                                    <p class="left">TRANSPORT AND LOGISTIC</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col card border-light img-hover-zoom-md img-hover-zoom--xyz">
                                <img src="../products/4.jpg" style="width: 100%;" alt="">
                                <div class="bottom-left">
                                    <h5 class="left">TRANSPORT AND LOGISTIC</h5>
                                    <p class="left">TRANSPORT AND LOGISTIC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col card border-light img-hover-zoom-big img-hover-zoom--xyz">
                        <img src="../products/4.jpg" style="width: 100%;" alt="">
                        <div class="bottom-left">
                            <h5 class="left">TRANSPORT AND LOGISTIC</h5>
                            <p class="left">TRANSPORT AND LOGISTIC</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <br><br>
        </div>
        <div class="row container">
            <div class="col-7">
                <div class="panel1 panel-default" style="background-color:;"> 
                    <div class="panel-heading" style="background-color:;">
                        <a class="btn-lg btn-dark" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Ritz Instrument</a>
                        <div id="panel-element-566205" class="panel-collapse1 collapse" style="background-color:; color:#000;">
                            <div class="panel-body" style="border:none; font-size:14px; padding-bottom:0; margin-bottom:0;">
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('image/product/3.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Card title</h5>
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item">Cras justo odio</li>
                                              <li class="list-group-item">Dapibus ac facilisis in</li>
                                              <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                            <div class="card-body">
                                              <a href="#" class="card-link">Card link</a>
                                              <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{asset('image/product/4.png')}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Card title</h5>
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item">Cras justo odio</li>
                                              <li class="list-group-item">Dapibus ac facilisis in</li>
                                              <li class="list-group-item">Vestibulum at eros</li>
                                            </ul>
                                            <div class="card-body">
                                              <a href="#" class="card-link">Card link</a>
                                              <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="panel2 panel-default" style="background-color:;"> 
                    <div class="panel-heading" style="background-color:;">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Link 1</a>
                        <div id="panel-element-566205" class="panel-collapse2 collapse" style="background-color:; color:#000;">
                            <div class="panel-body" style="border:none; font-size:14px; padding-bottom:0; margin-bottom:0;">
                                 We work for almost all web based application, database-driven systems, mapping and geo-spatial applications, and large content managed websites
                                <br /><br /><p style="font-style:italic; font-weight:700;">2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection