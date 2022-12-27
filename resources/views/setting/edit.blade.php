@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="d-sm-flex justify-content-end mb-4">
{{--            <a href="{{route('admin.about.create')}}" class="btn btn-primary btn-sm">--}}
               Täze Goş
            </a>
        </div> -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Peýdaly Maglumatlar</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
{{--                    <div class="col">--}}
{{--                        <label for="title_tk">Ady türkmençe</label>--}}
{{--                        <input type="text" class="form-control" name="title_tk" id="title_tk" value="{{ $about->title_tk }}"/>--}}
{{--                    </div>--}}
                    <div class="col">
                        <label for="content_tk">Maglumat türkmençe</label>
                        <textarea id="content_tk" class="form-control" rows="3" name="content_tk">{{ $about->content_tk }}</textarea>
                    </div>
                </div>

                <div class="row">
{{--                    <div class="col">--}}
{{--                        <label for="title_ru">Ady rusça</label>--}}
{{--                        <input type="text" class="form-control " name="title_ru" id="title_ru" value="{{ $about->title_ru }}" />--}}
{{--                    </div>--}}
                    <div class="col">
                        <label for="content_ru">Maglumat rusça</label>
                        <textarea id="content_ru" class="form-control" rows="3" name="content_ru">{{ $about->content_ru }}</textarea>
                    </div>
                </div>

                <div class="row">
{{--                    <div class="col">--}}
{{--                        <label for="title_en">Ady iňlisçe</label>--}}
{{--                        <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $about->title_en }}"/>--}}
{{--                    </div>--}}
                    <div class="col">
                        <label for="content_en">Maglumat iňlisçe</label>
                        <textarea id="content_en" class="form-control" rows="3" name="content_en">{{ $about->content_en }}</textarea>
                    </div>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="image">Surat</label>--}}
{{--                    <input type="file" class="form-control" name="image" id="image"/>--}}
{{--                </div>--}}
{{--                <div class="my-4">--}}
{{--                    <h4>Köne Surat</h4>--}}
{{--                    <img src="{{ asset($about->image) }}" alt="Surat" width="100px;">--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-success mt-3">Üýtget</button>
            </form>
            </div>
        </div>
    </div>
@endsection
