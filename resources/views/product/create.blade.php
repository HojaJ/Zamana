@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{route('admin.product.create')}}" class="btn btn-primary btn-sm">
               Täze Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            </div>
            <div class="card-body">
            <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_tk">Ady türkmençe</label>
                    <input type="text" class="form-control" name="name_tk" id="name_tk"/>
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady rusça</label>
                    <input type="text" class="form-control" name="name_ru" id="name_ru"/>
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady iňlisçe</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"/>
                </div>

                <div class="form-group">
                    <label for="image">Surat</label>
                    <input type="file" class="form-control" name="image" id="image"/>
                </div>

                <div class="form-group">
                    <label>Category:</label>
                    <select class="form-control" name="category">
                        <option value=""></option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name_tk}}</option>
                        @endforeach
                      </select>
                </div>
                
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
