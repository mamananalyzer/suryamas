@extends('layout/base')

@section('title', 'About')

@section('container')


<div class="container">
    <div class="row pt-4 marginoff" id="about">
      <div class="col-lg text-center">
        <div class="border-info Kiri">
          <img src="img/amptronsepfamily.jpeg" width="100%" height="100%" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Amptron & Suryamas Family</h5>
            <hr>
            {{-- <p class="card-text grey">
              In 1997, PT. Amptron Instrumindo was established as a specialist Metering and Electrical
              Instrumentation company. We are belong to the Amptron Group which is already extablished since
              1982 with offices in Singapore, Malaysia, Thailand, and Indonesia, operate Internationally to serve
              our customers locally.
            </p> --}}
          </div>
        </div>
      </div>


      <div class="accordion col-lg Kanan" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="gold">
                      <h6><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> ABOUT US</h6>
                  </div>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body grey">
                PT. Suryamas Elsindo Primatama is a company that has provided service and electrical installation product since 1996. Our core business scope mainly covers sales and supply of electrical and mechanical components (ME) to most industries, panel maker, automation and retail market. We are agents of the world's leading brands such as ABB Entrelec, GE Grid Solution (Ex. Alstom) and RITZ Transformer (MWB). We have supplied the various electrical products to all different industries. With our presence in the market and directly backed up with manufacturers so as to provide all necessary items, where we provide mostly for panel builder and contractors for daily activities as well as projects in Indonesia.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="gold">
                      <h6><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> VISI DAN MISI</h6>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body grey">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

      <br>

    <div class="section container">
        <div class="row">
            <div class="col text-center">
              <h2>Our Customer</h2>
              <hr>
            </div>
        </div>
        <div class="portfolio" id="partner">
          <div class="row" id="">
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/pln.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/siemens.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/abb.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/schneider.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/tamco.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/techsea.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/mitraida.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/gspe.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/altrak.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/exabb.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/gae.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/ge.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-4 text-center thumbnail">
                <div class="card border-light">
                    <img src="img/partner/ume.png" width="100%" height="100%" class="card-img-top" alt="...">
                    <hr>
                </div>
            </div>
            <div class="col-sm-4 text-center thumbnail">
                <div class="card border-light">
                    <img src="img/partner/indokordsa.png" width="100%" height="100%" class="card-img-top" alt="...">
                    <hr>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
