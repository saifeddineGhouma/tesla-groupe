@extends('layout.master')
@section('logo')
<a class="navbar-brand text-brand" href="index.html">TESLA<span class="color-b">GROUPE</span></a>
@endsection
@section('carousel')
  @include('layout.inc.carousel')
@endsection

@section('content')
   <!-- ======= Services Section ======= -->
    <!--section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Company</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-gamepad"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h4 class="title-c">Tesla <br/> Trading</h4>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-usd"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Tesla <br/> Electrical </h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-home"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Tesla <br/> Consulting</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="fa fa-home"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sell</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section--><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12 section-t8">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{asset('site/assets/img/about-2.jpg')}}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block">
                <div class="title-vertical d-flex justify-content-start">
                  <span>Tesla Groupe</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                @lang('nav.about-us')

                </div>
                <p class="color-text-a">
                @lang('title.tesla_groupe')
                  </p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    
    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Companies</h2>
              </div>
            
            </div>
          </div>
        </div>
      

          @include('site.inc.company')

      </div>
    </section><!-- End Latest News Section -->

    

  
   


    @endsection
