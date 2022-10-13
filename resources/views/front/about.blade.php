@extends('layouts.user-layout')
@section('title', 'About')
@section('content')


<main class="main">
    <section class="about">
        <div class="container">
          <h3 class="text-center suggest-title">Biz Barada</h3>
            <div class="row row-order">
                <div class="col-lg-6">
                    <div class="about__content">
                      <p>{!! $about->{'content_'.app()->getLocale()} !!}
                      </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__img">
                        <img src="{{ asset($about->image) }}" alt="About US" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
              <h3 class="text-center contact-us">Biz bilen habaraşyň</h3>

                <div class="col-xl-8 col-lg-9 contact_col col-12">
                  <div class="contact_us mt-5">
                    <form action="{{ route('mail') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <input type="text" class="form-control my-sm-3 my-1" name="tell" id="" placeholder="Telefon belgiňizi giriziň" required>
                        <input type="email" class="form-control my-sm-3 my-1" name="email" id="" placeholder="e-poçtaňyzy giriziň" required>
                        <textarea name="content" class="form-control my-sm-3 my-1"  rows="6" required>Ýüzlenmäňizi giriziň</textarea>
                        <button type="submit" class="see-all my-md-5 my-2">Ugrat</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection
