@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('admin.about.create') }}" class="btn btn-primary btn-sm">
                Goş
            </a>
        </div> -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sayt Maglumatlary</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ady</th>
                                <th>Maglumatlar</th>
                                <th>Surat</th>
                                <th>Goşmaça</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if( isset($about) )
                                <tr>
                                    <td>
                                        {{ $about->title_tk }}
                                        <hr>
                                        {{ $about->title_ru }}
                                        <hr>
                                        {{ $about->title_en }}
                                    </td>
                                    <td>
                                        {{ $about->content_tk }}
                                        <hr>
                                        {{ $about->content_ru }}
                                        <hr>
                                        {{ $about->content_en }}
                                    </td>
                                    <td>
                                        <img src="{{asset($about->image)}}" alt="Surat" width="90px">
                                    </td>
                                    
                                    <td>
                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info btn-sm text-white">
                                            <i class="fas fa-edit"></i> Üýtget
                                        </a>
                                        <!-- <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm text-white btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                        </form> -->
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
