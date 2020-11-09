@extends('layout/base')

@section('title', 'Clients')

@section('container')

    <div class="section container">
      <div class="row">
        <div class="col text-center">
          <h2>Our Brand</h2>
          <hr>
        </div>
      </div>
      <div class="" id="brand">
            <div class="row align-items-start">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="abb" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/abb.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Digital Power AC & DC Power Meter, Mult-Circuit Energy Monitoring and AcuCT </p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="elesol" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/elesol.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>LED <br> Backlight <br> Annunciators</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="ge" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/ge.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Instrument displays <br> Hour counters <br> Pulse counters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="hilkar" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/hilkar.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Perfection in Automation Complete automation solution from Austria for over 30 years</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="row align-items-start">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="ritz" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/ritz.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Programmable <br> Power Tranducers <br> Barriers, Transmitters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="te" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/te.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Monitoring <br> & <br> Control Relays</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="emh" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/emh.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Smart Meter Gateway <br> Special meters <br> Domestic meters & smart meters</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="leipole" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/leipole.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Fan Filter <br> Enclosure Thermostat <br> Enclosure Hygrostat</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="w-100"></div>
            {{-- <div class="row">
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="monarch" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/monarch.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Stroboscope, Tachometer <br> Vibration Measurement <br> Process Chart Recorder</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="Rishabh" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/rishabh.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Multifunction <br> Smart Demand Controller <br> Power Quality Analyzer</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3 text-center thumbnail">
                    <div class="card border-light">
                        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
                            <input name="brand" class="form-control mr-sm-2" value="wharton" placeholder="Search" aria-label="Search" hidden>
                            <button class="btn btn-outline-info border-0 my-2 my-sm-0" type="submit">
                                <img src="img/principal/wharton.png" width="100%" height="100%" class="card-img-top" alt="...">
                                <p>Digital Clocks <br> Time Information Displays <br> for Professional Applications</p>
                                <hr>
                            </button>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- <div class="row pt-4 offset-md-1 container" id="about">
      <div class="col-md-5 pKiri">

      </div>
      <div class="col-md-6 pKanan" id="">

      </div>
    </div> --}}
@endsection
