@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    @foreach ($produk as $prod)
    <form method="POST" action="{{ url('admin/produk/update/'. $prod->id) }}" class="col-sm-6">
        {{ csrf_field() }} 
        <h4 style="text-align: center">Form Edit Data</h4>
        <div class="form-group row">
            <label for="nama_barang" class="col-4 col-form-label">Nama Barang</label>
            <div class="col-8">
                <input id="nama_barang" name="nama_barang" type="text" value="{{ $prod->nama_barang }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar" class="col-4 col-form-label">Gambar</label>
            <div class="col-8">
                <input id="gambar" name="gambar" type="text" value="{{ $prod->gambar }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="kode_barang" class="col-4 col-form-label">Kode Barang</label>
            <div class="col-8">
                <input id="kode_barang" name="kode_barang" type="text" value="{{ $prod->kode_barang }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
                <input id="stok" name="stok" type="text" value="{{ $prod->stok }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_barang" class="col-4 col-form-label">Jenis Barang</label>
            <div class="col-8">
                <input id="jenis_barang" name="jenis_barang" type="text" value="{{ $prod->jenis_barang }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-4 col-form-label">Harga</label>
            <div class="col-8">
                <input id="harga" name="harga" type="text" value="{{ $prod->harga }}" class="form-control" spellcheck="false" data-ms-editor="true">
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
