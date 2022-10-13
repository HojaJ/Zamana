@extends('layouts.user-layout')
@section('title', 'Suggests')
@section('content')


<main class="main">
    <section class="suggest">
        <div class="container">
          <h3 class="text-center suggest-title">Peydaly Maslahatlar</h3>

            <div class="row">

            @foreach($suggests as $suggest)
              <div class="col-md-6 col-lg-4">
                <div class="suggest-item-page">
                  <img src="{{ asset($suggest->image) }}" alt="Peynir" class="img-fluid">
                  <div class="suggest-item__content">
                    <h4>{{ $suggest->{'title_'.app()->getLocale()} }}</h4>
                    <p>{!!
                       \Illuminate\Support\Str::limit($suggest->{'content_'.app()->getLocale()}, 160, $end='...')
                      !!}</p>
                    <a href="{{ route('suggestshow', $suggest->id) }}">Doly oka</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection
