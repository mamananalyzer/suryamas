@extends('layout/base')

@section('title', 'Principal')

@section('container')

    <div class="section container">
        <div class="row">
            <div class="col text-center">
            <h2>Our Brand</h2>
            <hr>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=abb')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="100%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/abb.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">ABB</h4>
                        <p>Air Circuit Breaker, MCCB, Contactor, Minature Relay CRMX, Capacitor Bank, Motor Starter, NAL LBS, Relay Protection, M4M metering & etc</p>
                    </article>
                    </a>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=elesol')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/elesol.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Elesol (Electrical Solution)</h4>
                        <p>Our saving energy & efficiency solution to reduce electrical consumption up to 15% of billing expenses by filtering noise and electromagnetic waves around the area</p>
                    </article>
                    </a>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=ge')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ge.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Ge Grid Solution - Alstom</h4>
                        <p>Relay Protection & MMLG MMLB Test Block</p>
                    </article>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=hilkar')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="100%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/hilkar.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Hilkar</h4>
                        <p>Neutral Grounding Resistor (NGR) & MV-HV Reactors</p>
                    </article>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
    
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=ritz')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/ritz.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">RITZ Instrument Transformer ( ex MWB )</h4>
                        <p>Medium Voltage Current & Voltage Transformer, Solid Insulated Busbar System ( MV Busbar), MV Dry Type Power Transformer & Sensors Transformer CVT</p>
                    </article>
                    </a>
                </div>
    
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=te')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/te.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">TE Connectivity</h4>
                        <p>Entrelec Terminal Blocks ( Screw Clamp - PI Spring), Essailec Test Blocks (Tceva - Cceva), Heavy Duty Connector & Distribution Block (DBL).</p>
                    </article>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{url('/product?brand=other')}}">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5 h-100">
                        <img width="50%" class="d-inline-block img-fluid mb-4" src="{{asset('img/principal/other.png')}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Other</h4>
                        <p>Orvibo Smart Home Automation, Schneider, Low- Medium Voltage switchgear components and electrical building maintenance.</p>
                    </article>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
