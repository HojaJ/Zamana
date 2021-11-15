@extends('layouts.user-layout')
@section('content')
<main class="main" >
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
      <div class="hero-bg"></div>  
      <div class="additional__div">
        <img class="additional__div-img" src="{{ asset('img/hero-image2.png') }}" alt="Hero">
      </div>
    </section>

    <section class="panel">
      <div class="container">
        <div class="section-title">
          <h4>Önümlerimiz</h4>
          <a href="/" class="see-all">Hemmesini gör</a>
        </div>
      </div>
  
      <div class="bottles d-flex justify-content-center ">
        <div class="bottles__imgs d-flex">
          <div class="bottles__img-1">
            <img src="{{ asset('img/bottle1.png') }}" alt="Süýt">
          </div>
          <div class="bottles__img-2">
            <img src="{{ asset('img/bottle2.png') }}" alt="Aýran">
          </div>
          <div class="bottles__img-3">
            <img src="{{ asset('img/bottle3.png') }}" alt="Kefir">
          </div>
        </div>
      </div>

    </section>
        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts panel">
            <div class="custom-shape-divider-bottom-1634679102">
              <svg xmlns="http://www.w3.org/2000/svg" width="1443.044" height="138.728" viewBox="0 0 1443.044 138.728">
                <path id="Path_6890" data-name="Path 6890" d="M0,0S-55.228-86.5,304.772-86.5c87.84,0,324.329,66.961,436.748,74.923,137.322,9.726,295.019-55.57,422.131-54.822C1359.415-65.241,1440,0,1440,0l-9.208,52.232H0Z" transform="translate(3.044 86.496)" fill="#fdfaf2"/>
              </svg>
            </div>
          <div class="container">
    
            <div class="row">
    
              <div class="col-md-4">
                <div class="count-box">
                  <img src="{{ asset('img/milk.png') }}" alt="Milk" class="count-box__img">
                  <div>
                    <span data-purecounter-start="45000" data-purecounter-end="50000" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Bir ýyldaky bagtly müşderilerimiz</p>
                  </div>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="count-box">
                  <img src="{{ asset('img/customer-satisfaction.png') }}" alt="Customer satification" class="count-box__img">
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Bagtly hyzmatdaşlarymyz</p>
                  </div>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="count-box">
                  <img src="{{ asset('img/cow.png') }}" alt="Cow" class="count-box__img">
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hyzmatyňyzdaky sygyrlarymyz</p>
                  </div>
                </div>
              </div>    
            </div>
    
          </div>
        </section><!-- End Counts Section -->

      <!-- ======= Moments Section ======= -->
      <section id="moments" class="moments">
        <div class="container">
          <div class="section-title">
            <h4>Iň gowy pursatlar</h4>
            <a href="{{ route('moment') }}" class="see-all">Hemmesini gör</a>
          </div>
          <div class="moments-slider swiper scrollbar-hidden">
            <div class="swiper-wrapper align-items-center">

            @foreach($moments as $moment)
              <div class="swiper-slide">
                <div class="moments-slider__img">
                  <img src="{{ asset($moment->image) }}" class="img-fluid" alt="Moments">
                </div>
              </div>
            @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="moments-button-prev"><i class="bi bi-arrow-left-circle-fill"></i></div>
            <div class="moments-button-next"><i class="bi bi-arrow-right-circle-fill"></i></div>
          </div>
        </div>
      </section><!-- End Moments Section -->

      <!-- ======= Suggests Section ======= -->
    <section id="suggests" class="suggests">
      <div class="custom-shape-divider-bottom-1634679102">
        <svg xmlns="http://www.w3.org/2000/svg" width="1452.315" height="133.973" viewBox="0 0 1452.315 133.973">
          <path id="baçk_yashyl" data-name="baçk yashyl" d="M0,26.087S92.117-64.251,265.668-60.274,488.474,26.094,694.2,41.995c162.878,12.589,376.482-60.232,533.882-66.475,165.345-6.558,224.231,50.567,224.231,50.567V73.571H0Z" transform="translate(0 60.402)" fill="#00962e"/>
        </svg>
        </div>

      <div class="container">
        <div class="section-title">
          <h4>Bileýin diýseň</h4>
          <a href="{{ route('suggest') }}" class="see-all">Hemmesini gör</a>
        </div>
        <div class="suggest-slider swiper">
          <div class="swiper-wrapper">

          @foreach($suggests as $suggest)
            <div class="swiper-slide">
              <div class="suggest-item">
                <img src="{{ asset($suggest->image) }}" alt="Peynir" class="img-fluid">
                <div class="suggest-item__content">
                  <h3>{{ $suggest->{'title_'.app()->getLocale()} }}</h3>
                  <p>
                  {!!
                    \Illuminate\Support\Str::limit($suggest->{'content_'.app()->getLocale()}, 160, $end='...') 
                  !!}
                  </p>
                  <a href="{{ route('suggestshow', $suggest->id) }}">Doly oka</a>                
                </div>
              </div>
            </div><!-- End suggest item -->
          @endforeach

          </div>
          <div class="suggests-button-prev"><i class="bi bi-arrow-left-short"></i></div>
          <div class="suggests-button-next"><i class="bi bi-arrow-right-short"></i></div>    
        </div>
      </div>
    </section><!-- End Suggests Section -->


    <!-- ======= Clients Section ======= -->
    <section class="clients">
      <div class="container">
        <h3>Bize ynanýalar</h3>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

          @foreach($partners as $partner)
          <div class="swiper-slide"><img src="{{ asset($partner->image) }}" class="img-fluid" alt=""></div>
          @endforeach
          
        </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="testimonials">
      <div class="container">
        <h2>Hyzmatdaşlarymyzyň pikiri</h2>
        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper align-items-center">
          
          @foreach($partners as $partner)
            @if(isset($partner->{'testimonial_'.app()->getLocale()}))
            <div class="swiper-slide">
                <div class="row mx-md-5 align-items-start">
                  <div class="testimonial__content col-6">
                    <p>{{ $partner->{'testimonial_'.app()->getLocale()} }}</p>
                    <h4 class="text-uppercase">{{ $partner->{'title_'.app()->getLocale()} }}</h4>
                  </div>
                  <div class="col-6 text-end">
                    <img src="{{ asset($partner->image) }}" class="img-fluid" alt="Client Logo">
                  </div>              
                </div>
              </div>
              @endif
            @endforeach

            



          </div>
          <div class="testimonials-button-prev"><i class="bi bi-arrow-left-short"></i></div>
          <div class="testimonials-button-next"><i class="bi bi-arrow-right-short"></i></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    
  </main><!-- End #main -->
@endsection
