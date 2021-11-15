@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{route('admin.moment.create')}}" class="btn btn-primary btn-sm">
               Täze Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Moment</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.moment.update', $moment->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Ady</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $moment->title }}"/>
                </div>
                <div class="form-group">
                    <label for="image">Surat</label>
                    <input type="file" class="form-control" name="image" id="image"/>
                </div>
                <div class="my-4">
                    <h4>Köne Surat</h4>
                    <img src="{{ asset($moment->image) }}" alt="Surat" width="100px;">
                </div>
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
