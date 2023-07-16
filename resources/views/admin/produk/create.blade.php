@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    <form method="POST" action="{{ url('admin/produk/store') }}" class="col-sm-6">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama_barang" class="col-sm-4 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
                <input id="nama_barang" name="nama_barang" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="kode_barang" class="col-sm-4 col-form-label">Kode Barang</label>
            <div class="col-sm-8">
                <input id="kode_barang" name="kode_barang" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="gambar" class="col-sm-4 col-form-label">Gambar</label>
            <div class="col-sm-8">
                <input id="gambar" name="gambar" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="stok" class="col-sm-4 col-form-label">Stok</label>
            <div class="col-sm-8">
                <input id="stok" name="stok" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="jenis_barang" class="col-sm-4 col-form-label">Jenis Barang</label>
            <div class="col-sm-8">
                <input id="jenis_barang" name="jenis_barang" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="harga" class="col-sm-4 col-form-label">Harga</label>
            <div class="col-sm-8">
                <input id="harga" name="harga" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
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
