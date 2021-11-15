@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm">
                Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Ady türkmençe</th>
                                <th>Ady rusça</th>
                                <th>Ady iňlisçe</th>
                                <th>Surat</th>
                                <th>Category</th>
                                <th>Goşmaça</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $product->title_tk }}</td>
                                    <td>{{ $product->title_ru }}</td>
                                    <td>{{ $product->title_en }}</td>
                                    <td>
                                        <img src="{{asset($product->image)}}" alt="Surat" width="90px">
                                    </td>
                                    <td>{{ $product->category->name_tk }}</td>
                                    <td>
                                        <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-edit"></i> Üýtget
                                        </a>
                                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm text-white btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
