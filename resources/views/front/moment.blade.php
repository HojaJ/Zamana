@extends('layouts.user-layout')
@section('title', 'Moments')
@section('content')


<main class="main">
    <section class="moment mt-5">
        <div class="container">
          <h3 class="text-center suggest-title">{{ __('best_moments') }}</h3>

            <div class="row">
              @foreach($moments as $moment)
              <div class="col-md-6">
                <div class="moments-slider__img my-5">
                  <img src="{{ asset($moment->image) }}" class="img-fluid" alt="Moments">
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection
