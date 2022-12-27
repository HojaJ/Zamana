@extends('layouts.user-layout')
@section('title', 'Products')

@section('content')


  <main class="main">
    <section class="product">
        <div class="container">
          <h3 class="text-center">{{ __("product_title") }}</h3>
          <h5 class="text-center mt-2 max-w mx-auto">{{ __("product_desc") }}</h5>
            <div class="row justify-content-center">
                @foreach($categories as $category)

                  <div class="col-md-6 col-xl-4 mt-5">
                    <div class="products">
                      <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                        @foreach($category->products as $product)
                          <div class="swiper-slide">
                            <div class="product-slide">
                              <img src="{{ asset($product->image) }}" alt="Peynir">
                              <h5>{{ $product->{'title_'.app()->getLocale()} }}</h5>
                            </div>
                          </div>
                        @endforeach
                      </div>
                        <div class="button-prev"><i class="bi bi-arrow-left-short"></i></div>
                        <div class="button-next"><i class="bi bi-arrow-right-short"></i></div>
                        <div class="swiper-pagination"></div>
                        <h3 class="text-center mt-5">{{ $category->{'name_'.app()->getLocale()} }}</h3>
                      </div>
                    </div>
                </div>

              @endforeach
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection
