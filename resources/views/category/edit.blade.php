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
            <form action="{{route('admin.category.update', $category->id)}}"  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"  value="{{$category->slug}}">
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady türkmençe</label>
                    <input type="text" class="form-control" name="name_tk" id="name_tk" placeholder="Ady türkmençe"  value="{{$category->name_tk}}" />
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady rusça</label>
                    <input type="text" class="form-control" name="name_ru" id="name_ru" placeholder="Ady rusça"  value="{{$category->name_ru}}" />
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady iňlisçe</label>
                    <input type="text" class="form-control" name="name_en" id="name_en" placeholder="Ady iňlisçe"  value="{{$category->name_en}}"/>
                </div>
                <button type="submit" class="btn btn-success">Uýtget</button>
            </form>
            </div>
        </div>
    </div>
@endsection
