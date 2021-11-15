@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{route('admin.suggest.create')}}" class="btn btn-primary btn-sm">
               Täze Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Peýdaly Maslahatlar</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.suggest.update', $suggest->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <label for="title_tk">Ady türkmençe</label>
                        <input type="text" class="form-control" name="title_tk" id="title_tk" value="{{ $suggest->title_tk }}"/>
                    </div>
                    <div class="col">
                        <label for="content_tk">Maslahat türkmençe</label>
                        <textarea id="content_tk" class="form-control" rows="3" name="content_tk">{{ $suggest->content_tk }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="title_ru">Ady rusça</label>
                        <input type="text" class="form-control" name="title_ru" id="title_ru" value="{{ $suggest->title_ru }}" />
                    </div>
                    <div class="col">
                        <label for="content_ru">Maslahat rusça</label>
                        <textarea id="content_ru" class="form-control" rows="3" name="content_ru">{{ $suggest->content_ru }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="title_en">Ady iňlisçe</label>
                        <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $suggest->title_en }}"/>
                    </div>
                    <div class="col">
                        <label for="content_en">Maslahat iňlisçe</label>
                        <textarea id="content_en" class="form-control" rows="3" name="content_en">{{ $suggest->content_en }}</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="image">Surat</label>
                    <input type="file" class="form-control" name="image" id="image"/>
                </div>
                <div class="my-4">
                    <h4>Köne Surat</h4>
                    <img src="{{ asset($suggest->image) }}" alt="Surat" width="100px;">
                </div>
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
