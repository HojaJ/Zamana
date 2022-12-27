@extends('layouts.user-layout')
@section('title', 'Suggests')
@section('content')


<main class="main">
    <section class="suggest-detail">
        <div class="container">
          <h3 class="text-center my-5">{{ __("Suggests") }}</h3>

            <div class="row">
              <div class="col-md-12 text-center">
                <h4 class="text-bold">{!! $id->{'title_'.app()->getLocale()} !!}</h4>
                <img src="{{ asset($id->image); }}" alt="Suggest" class="my-5">
                <p class="text-start mb-5">
                {!! $id->{'content_'.app()->getLocale()} !!}
                </p>
              </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->


@endsection
