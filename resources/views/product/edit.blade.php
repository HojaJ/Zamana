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
            <form action="{{route('admin.product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name_tk">Ady türkmençe</label>
                    <input type="text" class="form-control" name="name_tk" id="name_tk" value="{{ $product->title_tk }}"/>
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady rusça</label>
                    <input type="text" class="form-control" name="name_ru" id="name_ru" value="{{ $product->title_ru }}" />
                </div>
                <div class="form-group">
                    <label for="name_tk">Ady iňlisçe</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"  value="{{ $product->title_en }}"/>
                </div>

                <div class="form-group">
                    <label for="image">Surat</label>
                    <input type="file" class="form-control" name="image" id="image"/>
                </div>
                
                <div class="my-4">
                    <h4>Köne Surat</h4>
                    <img src="{{ asset($product->image) }}" alt="Surat" width="100px;">
                </div>


                <div class="form-group">
                    <label>Category:</label>
                    <select class="form-control" name="category">
                        <option value=""></option>
                        @foreach($categories as $category)
                          <option value="{{$category->id}}"  {{$category->id == $product->category_id ? 'selected' : ''}} >{{$category->name_tk}}</option>
                        @endforeach
                      </select>
                </div>
                
                <button type="submit" class="btn btn-success">Goş</button>
            </form>
            </div>
        </div>
    </div>
@endsection
