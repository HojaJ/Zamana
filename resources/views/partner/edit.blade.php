@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{route('admin.partner.create')}}" class="btn btn-primary btn-sm">
               Täze Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Partner</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.partner.update', $partner->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="title_tk">Ady türkmençe</label>
                        <input type="text" class="form-control" name="title_tk" id="title_tk" value="{{ $partner->title_tk }}"/>
                    </div>
                    <div class="col">
                        <label for="testimonial_tk">Komentariýasy türkmençe</label>
                        <textarea id="testimonial_tk" class="form-control textarea_summer" rows="3" name="testimonial_tk">{{ $partner->testimonial_tk }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="title_ru">Ady rusça</label>
                        <input type="text" class="form-control" name="title_ru" id="title_ru" value="{{ $partner->title_ru }}" />
                    </div>
                    <div class="col">
                        <label for="testimonial_ru">Komentariýasy rusça</label>
                        <textarea id="testimonial_ru" class="form-control textarea_summer" rows="3" name="testimonial_ru">{{ $partner->testimonial_ru }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="title_en">Ady iňlisçe</label>
                        <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $partner->title_en }}"/>
                    </div>
                    <div class="col">
                        <label for="testimonial_en">Komentariýasy iňlisçe</label>
                        <textarea id="testimonial_en" class="form-control textarea_summer" rows="3" name="testimonial_en">{{ $partner->testimonial_en }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Surat</label>
                    <input type="file" class="form-control" name="image" id="image"/>
                </div>
                <div class="my-4">
                    <h4>Köne Surat</h4>
                    <img src="{{ asset($partner->image) }}" alt="Surat" width="100px;">
                </div>
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
