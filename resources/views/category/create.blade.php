@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-sm">
               Täze Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Category</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
{{--                <div class="form-group">--}}
{{--                    <label for="slug">Slug</label>--}}
{{--                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">--}}
{{--                </div>--}}
                <div class="form-group">
                    <label for="name_tk">Ady türkmençe</label>
                    <input type="text" class="form-control" name="name_tk" id="name_tk" placeholder="Ady türkmençe"/>
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady rusça</label>
                    <input type="text" class="form-control" name="name_ru" id="name_ru" placeholder="Ady rusça"/>
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady iňlisçe</label>
                    <input type="text" class="form-control" name="name_en" id="name_en" placeholder="Ady iňlisçe"/>
                </div>
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
