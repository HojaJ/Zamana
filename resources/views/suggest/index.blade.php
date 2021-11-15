@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('admin.suggest.create') }}" class="btn btn-primary btn-sm">
                Goş
            </a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Peýdaly Maslahatlar</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Ady</th>
                                <th>Maslahatlar</th>
                                <th>Surat</th>
                                <th>Goşmaça</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suggests as $suggest)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{ $suggest->title_tk }}
                                        <hr>
                                        {{ $suggest->title_ru }}
                                        <hr>
                                        {{ $suggest->title_en }}
                                    </td>
                                    <td>
                                        {{ $suggest->content_tk }}
                                        <hr>
                                        {{ $suggest->content_ru }}
                                        <hr>
                                        {{ $suggest->content_en }}
                                    </td>
                                    <td>
                                        <img src="{{asset($suggest->image)}}" alt="Surat" width="90px">
                                    </td>
                                    
                                    <td>
                                        <a href="{{route('admin.suggest.edit', $suggest->id)}}" class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-edit"></i> Üýtget
                                        </a>
                                        <form action="{{ route('admin.suggest.destroy', $suggest->id) }}" method="POST" class="d-inline-block">
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
