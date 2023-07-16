@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    @foreach ($pelanggan as $prod)
    <form method="POST" action="{{ url('admin/pelanggan/update/'. $prod->id) }}" class="col-sm-6">
        {{ csrf_field() }}
        <h4 style="text-align: center">Form Edit Data</h4>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" value="{{ $prod->nama }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" type="text" value="{{ $prod->alamat }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="no_hp" class="col-4 col-form-label">No Hp</label>
            <div class="col-8">
                <input id="no_hp" name="no_hp" type="text" value="{{ $prod->no_hp }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-danger">Simpan Edit</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
