<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      @yield('logo')
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('site')}}"> @lang('nav.home')</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('nav.about')
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('tesla.electrical.about')}}">Tesla Electrical </a>
              <a class="dropdown-item" href="{{route('tesla.consulting.about')}}">Tesla Consulting </a>
              <a class="dropdown-item" href="{{route('tesla.plast.about')}}">Tesla Plastic</a>
              <a class="dropdown-item" href="{{route('tesla.trading.about')}}">Tesla Trading</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @lang('nav.project')
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('tesla.electrical.project')}}">Tesla Electrical </a>
              <a class="dropdown-item" href="{{route('tesla.consulting.project')}}">Tesla Consulting </a>
              <a class="dropdown-item" href="{{route('tesla.plast.project')}}">Tesla Plastic</a>
              <a class="dropdown-item" href="{{route('tesla.trading.project')}}">Tesla Trading</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(Session::get('lang')=='fr')
              <img src="{{asset('site/assets/img/fr.svg')}}" alt="Francais" class="img-size-50 mr-3 img-circle" style="width: 25px">
                @else
                <img src="{{asset('site/assets/img/gb.svg')}}" alt="Francais" class="img-size-50 mr-3 img-circle" style="width: 25px">
                @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('locale/fr')}}"><img src="{{asset('site/assets/img/fr.svg')}}" alt="Francais" class="img-size-50 mr-3 img-circle" style="width: 25px">Français</a>

              <a class="dropdown-item" href="{{url('locale/en')}}"><img src="{{asset('site/assets/img/gb.svg')}}" alt="anglais" class="img-size-50 mr-3 img-circle" style="width: 25px">Anglais</a>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
