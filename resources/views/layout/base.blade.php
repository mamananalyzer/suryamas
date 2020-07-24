<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style.css">


        <title>@yield('title')</title>
    </head>
    <body style="background-image: url('image/background.jpg');">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <!-- <a class="navbar-brand" href="#">SEP</a> -->
            <img src="image/sep.jpg" class="offset-sm-1" style="width: 250px;" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="panel panel-default collapse navbar-collapse text-center" style="font-weight: 800 !important;" id="navbarNav">
                <ul class="navbar-nav offset-md-3">
                    <li class="panel-heading nav-item mr-1">
                        <a class="panel-collapse nav-link" href="{{url('/')}}"><h6>Home</h6></a>
                    </li>
                    <li class="nav-item mr-1">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6>About Us</h6></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/about')}}">About</a>
                                <a class="dropdown-item" href="{{url('#')}}">Another action</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6>Products</h6></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/ABB')}}">ABB</a>
                                <a class="dropdown-item" href="{{url('/Ritz')}}">Ritz</a>
                                <a class="dropdown-item" href="{{url('/GE')}}">GE</a>
                                <a class="dropdown-item" href="{{url('#')}}">Another action</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6>Services</h6></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('#')}}">Action</a>
                                <a class="dropdown-item" href="{{url('#')}}">Another action</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6>Clients & Partners</h6></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('#')}}">Action</a>
                                <a class="dropdown-item" href="{{url('#')}}">Another action</a>
                                <a class="dropdown-item" href="{{url('#')}}">Something else here</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h6>Our Principal</h6></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/')}}">Action</a>
                                <a class="dropdown-item" href="{{url('/')}}">Another action</a>
                                <a class="dropdown-item" href="{{url('/')}}">Something else here</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="{{url('/')}}"><h6>Contact Us</h6></a>
                    </li>
                </ul>
            </div>
        </nav>
        
        @yield('container')
        
        <!-- footer -->
        <div class="foot row mr-auto text-left text-light bg-dark pl-5 pr-5 pt-5">
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
    
            </div>
            <div class="col-md-3">
                <h6>LATEST NEWS</h6>
                <hr class="bg-warning">
            </div>
            <div class="col-md-3">
                <h6>SITEMAP</h6>
                <hr class="bg-warning">
            </div>
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
    
    

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>