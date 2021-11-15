@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('admin.moment.create') }}" class="btn btn-primary btn-sm">
                Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pursatlar</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Ady</th>
                                <th>Surat</th>
                                <th>Goşmaça</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($moments as $moment)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $moment->title }}</td>
                                    <td>
                                        <img src="{{asset($moment->image)}}" alt="Surat" width="90px">
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('admin.moment.edit', $moment->id)}}" class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-edit"></i> Üýtget
                                        </a>
                                        <form action="{{ route('admin.moment.destroy', $moment->id) }}" method="POST" class="d-inline-block">
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
