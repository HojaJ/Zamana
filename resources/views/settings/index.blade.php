@extends('layouts.app')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">HomePage Maglumatlary</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ady</th>
                                <th>Maglumatlar</th>
                                <th>Goşmaça</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($settings as $setting)
                            <tr>
                                <td>
                               {{ $setting->name }}
                                </td>
                                <td>
                                    {{ $setting->val }}
                                </td>

                                <td>
                                    <a href="{{ route('admin.settings.edit', $setting->id) }}" class="btn btn-info btn-sm text-white">
                                        <i class="fas fa-edit"></i> Üýtget
                                    </a>
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
