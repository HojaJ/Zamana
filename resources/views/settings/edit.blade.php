@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow  mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">HomePage Maglumatlary</h6>
            </div>
            <div class="card-body col-6 mx-auto">
            <form action="{{route('admin.settings.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mx-auto mb-4">
                    <label for="settings">{{ $setting->name }}</label>
                    <input type="hidden" name="setting_id" value="{{ $setting->id }}">
                    <input type="text" class="form-control"  name="val" id="settings" value="{{ $setting->val }}"/>
                </div>
                <button type="submit" class="btn btn-success">Üýtget</button>
            </form>
            </div>
        </div>
    </div>
@endsection
