@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    <form method="POST" action="{{ url('admin/pelanggan/store') }}" class="col-sm-6">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input id="nama" name="nama" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <input id="alamat" name="alamat" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="no_hp" class="col-sm-4 col-form-label">No Hp</label>
            <div class="col-sm-8">
                <input id="no_hp" name="no_hp" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <div class="offset-sm-4 col-sm-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<style>
    .form-control {
        background-color: red;
        color: white;
    }
</style>
@endsection
