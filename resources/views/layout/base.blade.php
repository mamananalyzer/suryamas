<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link rel="stylesheet" href="{{asset('css/style4.css')}}">
    <link rel="stylesheet" href="{{asset('css/test.css')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css')}}">

    {{-- jivo --}}
    <script src="//code.jivosite.com/widget/D1NWTYiLlh" async></script>
    {{-- endjivo --}}

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/589823a04dae2d0a6f9fdd49/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    {{-- zoom 90 percent --}}
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "90%"
        }
    </script>
    {{-- endzoom 90 percent --}}

    <link rel="icon" href="{{url('img/sep.jpg')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    {{-- header --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-ijo sticky-top">
            <!-- <a class="navbar-brand" href="#">SEP</a> -->
            <img src="img/sep.jpg" class="offset-sm-1" style="width: 200px;" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="panel panel-default collapse navbar-collapse text-center" style="font-weight: 800 !important;" id="navbarNav">
                <ul class="navbar-nav offset-md-3">
                    <li class="panel-heading nav-item mr-4"><a class="panel-collapse nav-link" href="{{url('/')}}"><h5>Home</h5></a></li>
                    <li class="nav-item mr-4"><a class="panel-collapse nav-link" href="{{url('/about')}}"><h5>About Us</h5></a></li>
                    <li class="nav-item mr-4"><a class="panel-collapse nav-link" href="{{url('/principal')}}"><h5>Our Brand</h5></a></li>
                    {{-- <li class="nav-item mr-4">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h5>Products</h5></a>
                            <div class="dropdown-menu text-center dropdown-menu-lg-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/ABB')}}"><img src="image/principal/abb.png" class="offset-sm-1" style="height: 45px;" alt=""></a>
                                <a class="dropdown-item" href="{{url('/Ritz')}}"><img src="image/principal/ritz.png" class="offset-sm-1" style="height: 65px;" alt=""></a>
                                <a class="dropdown-item" href="{{url('/GE')}}"><img src="image/principal/ge.png" class="offset-sm-1" style="height: 80px;" alt=""></a>
                                <a class="dropdown-item" href="{{url('/TE')}}"><img src="image/principal/te.png" class="offset-sm-1" style="height: 70px;" alt=""></a>
                                <a class="dropdown-item" href="{{url('/Elesol')}}"><img src="image/principal/elesol.png" class="offset-sm-1" style="height: 70px;" alt=""></a>
                                <a class="dropdown-item" href="{{url('/other')}}"><h4>Other</h4></a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item mr-4"><a class="panel-collapse nav-link" href="{{url('/contact')}}"><h5>Contact Us</h5></a></li>
                    {{-- <li class="nav-item mr-4"><a class="nav-link" href="{{url('/contact')}}"><h5>Contact Us</h5></a></li> --}}
                    <li class="nav-item mr-4"><a class="nav-link" href="{{url('/product')}}"><h5>Product</h5></a></li>
                </ul>
            </div>
        </nav>
    {{-- endheader --}}

    {{-- header --}}
    {{-- <nav class="navbarbar navbar navbar-expand-lg navbar-dark bg-blue sticky-top">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="img/aii.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Amptron Instrumindo
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
          <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right offset-md ml-5">
          <a class="nav-item nav-link pr-4" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/about') }}">About</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/principal') }}">Principal</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/product') }}">Product</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/products') }}">Profile</a>
        </ul>
      </div>
    </nav> --}}
    {{-- end header --}}


    @yield('container')


    <!-- footer -->
    <div class="foot row mr-auto text-left text-light bg-ijo pl-5 pr-5 pt-5">
        <div class="col-md-3">
            <h6>WORKING HOURS</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-4">
                <object data="{{url('img/work.svg')}}" type="{{url('img/work.svg')}}">
                  <img src="{{url('img/work.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>Monday - Friday : 08.15 - 17.15</p>
                <p>Saturday - Sunday : Closed</p>
              </div>
            </div>
            <div class="row">
              <div class="col toped">
                <a href="https://www.tokopedia.com/suryamasel" target="_blank">
                <img src="{{asset('img/toped.jpg')}}" width="110px" alt="">
                </a>
              </div>
              <div class="col wa">
                <a href="https://api.whatsapp.com/send?phone=6287744500052" target="_blank">
                <img src="{{asset('img/wa.jpg')}}" width="110px" alt="">
                </a>
              </div>
            </div>

        </div>
        <div class="col-md-6">
            <h6>MAPS</h6>
            <hr class="bg-warning">
            <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.540723636199!2d106.73745131413733!3d-6.192150662388513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76ef0b802cd%3A0xb05189fedb7cadb6!2sPT.%20Suryamas%20elsindo%20primatama!5e0!3m2!1sen!2sid!4v1606273852027!5m2!1sen!2sid" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        {{-- <div class="col-md-3">
            <h6>SITEMAP</h6>
            <hr class="bg-warning">
        </div> --}}
        <div class="col-md-3">
            <h6>CONTACT US</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/loc.svg')}}" type="{{url('img/loc.svg')}}">
                  <img src="{{url('img/loc.svg')}}" />
                </object>
              </div>
              <div class="col-10">
                <p>Komplek Rukan Taman Meruya
                <br>Blok M-51, Meruya Utara, Kembangan, Jakarta Barat,
                <br>Daerah Khusus Ibukota Jakarta 11620</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/email.svg')}}" type="{{url('img/email.svg')}}">
                  <img src="{{url('img/email.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>suryamas@cbn.net.id</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/phone.svg')}}" type="{{url('img/phone.svg')}}">
                  <img src="{{url('img/phone.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>(+62-21) 585 5055
                <br>(+62-21) 586 0826
                <br>(+62-21) 586 0828</p>
              </div>
            </div>
        </div>
    </div>
    <div class="row mr-auto text-center bg-light">
        <div class="col mr-auto text-light bg-grey font-italic">
            <blockquote class="blockquote mb-0 card-body">
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    <cite title="Suryamas Elsindo Primatama">***</cite>
                    &copy; Suryamas Elsindo Primatama 1997 - 2020
                  </small>
                </footer>
            </blockquote>
        </div>
    </div>
    <div></div>


    {{-- <div class="card text-dark bg-light">
      <div class="card-header">
        <a href="">aii.com</a> Global Website
      </div>
      <div class="card-body text-right">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">PT. Amptron Instrumindo |<cite title="Source Title"> © Amptron Instrumindo 1997-2020</cite></footer>
        </blockquote>
      </div>
    </div> --}}
    {{-- end footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
