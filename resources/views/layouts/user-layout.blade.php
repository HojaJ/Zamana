<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="TM, Turkmenistan, Zamana, Ashgabat, Peýnir, Süýt, Gatyk, Kefir" />

  <title>{{ config('app.name', 'Zamana') }}</title>
  <meta content="" name="description">

  

  <!-- Favicons -->
    
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
  <link rel="mask-icon" href="{{ asset('img/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body class="{{ (Request::is('/') || Request::is('en') || Request::is('ru')) ? 'front-page' : '' }}">

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ (Request::is('/') || Request::is('en') || Request::is('ru')) ? 'active' : '' }}" href="{{ route('home') }}">{{ __('Home') }}</a></li>
          <li><a class="nav-link {{ (Request::is('product') || Request::is('en/product') || Request::is('ru/product')) ? 'active' : '' }}" href="{{ route('product') }}">{{ __('Products') }}</a></li>
          <li><a class="nav-link {{ (Request::is('suggest/*') || (Request::is('en/suggest') || Request::is('en/suggest/*')) || (Request::is('ru/suggest') || Request::is('ru/suggest/*')) ) ? 'active' : '' }}" href="{{ route('suggest') }}">{{ __('Suggests') }}</a></li>
          <li><a class="nav-link {{ (Request::is('moment') || Request::is('en/moment') || Request::is('ru/moment')) ? 'active' : '' }}" href="{{ route('moment') }}">{{ __('Moments') }}</a></li>
          <li><a class="nav-link {{ (Request::is('about') || Request::is('en/about') || Request::is('ru/about')) ? 'active' : '' }}" href="{{ route('about') }}">{{ __('About') }}</a></li>

          <li class="dropdown lang">
            @if(Request::is('ru') || Request::is('ru/*'))
            <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"><span>RU</span>&nbsp;<img src="{{ asset('img/ru.png') }}" alt="Language"></a>
            @elseif(Request::is('en') || Request::is('en/*') )
            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span>EN</span>&nbsp;<img src="{{ asset('img/en.png') }}" alt="Language"></a>
            @else 
            <a href="{{ LaravelLocalization::getLocalizedURL('tk', null, [], true) }}"><span>TM</span>&nbsp;<img src="{{ asset('img/tm.png') }}" alt="Language"></a>
            @endif
    
            <ul>
              <li>
                @if(Request::is('ru') || Request::is('ru/*'))
                <a href="{{ LaravelLocalization::getLocalizedURL('tk', null, [], true) }}"><span>TM</span>&nbsp;<img src="{{ asset('img/tm.png') }}" alt="Language"></a>
                @elseif(Request::is('en') || Request::is('en/*') )
                <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"><span>RU</span>&nbsp;<img src="{{ asset('img/ru.png') }}" alt="Language"></a>
                @else 
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span>EN</span>&nbsp;<img src="{{ asset('img/en.png') }}" alt="Language"></a>
                @endif           
            </li>
              <li>
                @if(Request::is('ru') || Request::is('ru/*'))
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span>EN</span>&nbsp;<img src="{{ asset('img/en.png') }}" alt="Language"></a>
                @elseif(Request::is('en') || Request::is('en/*') )
                <a href="{{ LaravelLocalization::getLocalizedURL('tk', null, [], true) }}"><span>TM</span>&nbsp;<img src="{{ asset('img/tm.png') }}" alt="Language"></a>
                @else 
                <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"><span>RU</span>&nbsp;<img src="{{ asset('img/ru.png') }}" alt="Language"></a>
                @endif          
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')
  

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
          </a>
        </div>
        <div class="col-sm-12 ms-auto col-md-4  footer-contact  text-start">
          
        @foreach($infos as $info)
          @if($info->id == 2)
            <p><i class="bi bi-geo-alt-fill"></i> {{ $info->{'content_'.app()->getLocale()}  }}</p>
          @elseif($info->id == 3)
            <p><i class="bi bi-envelope-fill"></i> <a href="mailto:{{ $info->{'content_'.app()->getLocale()}  }}">{{ $info->{'content_'.app()->getLocale()}  }}</a></p>
          @elseif($info->id == 4)
            <p><i class="bi bi-telephone-fill"></i> <a href="tell:{{ $info->{'content_'.app()->getLocale()}  }}"> {{ $info->{'content_'.app()->getLocale()}  }}</a></p>            
          @endif
        @endforeach




          
          
          

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright text-center">
        &copy; {{ __('copyright') }}
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>